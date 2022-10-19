#!/bin/env php
<?php

use Illuminate\Support\Enumerable;

$app_path = dirname(__DIR__);

$src_path = $app_path . '/src';

/**
 * @param string $message
 * @param string $prefix
 * @return void
 */
function println(string $message, string $prefix = 'info')
{
    \fwrite(
        STDOUT,
        '[' . date('Y-m-d H:i:s') . '  ' . strtoupper($prefix) . ']  ' . $message . PHP_EOL
    );
}

/**
 * @param string $url
 * @param array $query
 * @return bool|string
 */
function curl_fetch(string $url, array $query = []): array
{
    $ch = \curl_init();

    $query && $url .= '?' . http_build_query($query);

    \curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    \curl_setopt($ch, CURLOPT_URL, $url);

    \curl_setopt($ch, CURLOPT_TIMEOUT, 10);

    try {
        $body = \curl_exec($ch);

        if (is_string($body)) {
            return json_decode($body, true);
        }
        return [];
    } finally {
        \curl_close($ch);
    }
}

/**
 * @param array $items
 * @param string $subject
 * @return string
 */
function replaces(array $items, string $subject): string
{
    return str_replace(
        array_keys($items),
        array_values($items),
        $subject
    );
}

class Arr
{
    /**
     * @param array $array
     * @param string|null $key
     * @param $default
     * @return mixed
     */
    public static function get(array $array, string $key = null, $default = null)
    {
        $keys = explode('.', $key);

        if (is_null($key)) {
            return $array;
        }

        foreach ($keys as $key) {
            if (static::exists($array, $key)) {
                $array = $array[$key];
            } else {
                return $default;
            }
        }

        return $array;
    }

    /**
     * @param $array
     * @param $key
     * @return bool
     */
    public static function exists($array, $key): bool
    {
        if ($array instanceof Enumerable) {
            return $array->has($key);
        }

        if ($array instanceof ArrayAccess) {
            return $array->offsetExists($key);
        }

        return array_key_exists($key, $array);
    }
}

class Cls
{
    /**
     * @param object $object
     * @param string|null $key
     * @param $default
     * @return mixed|object|null
     */
    public static function get(object $object, string $key = null, $default = null)
    {
        $keys = explode('->', $key);

        if (is_null($key)) {
            return $object;
        }

        foreach ($keys as $key) {
            if (is_object($object) && static::exists($object, $key)) {
                $object = $object->{$key};
            } elseif (is_array($object) && Arr::exists($object, $key)) {
                $object = Arr::get($object, $key);
            } else {
                return $default;
            }
        }

        return $object;
    }

    /**
     * @param object $object
     * @param $key
     * @return bool
     */
    public static function exists(object $object, $key): bool
    {
        if ($object instanceof Enumerable) {
            return $object->has($key);
        }

        if ($object instanceof ArrayAccess) {
            return $object->offsetExists($key);
        }

        return property_exists($object, $key);
    }
}

class FetchDoc
{
    /**
     * fetch top doc menus.
     * @return array|null
     */
    public function fetchDocMenus(): array
    {
        return curl_fetch(
            'https://op.jinritemai.com/doc/external/open/queryDocDirTree',
            ['dirId' => 3]
        );
    }

    /**
     * fetch in menu api list
     * @param int $dirId
     * @return array|null
     */
    public function fetchDocApis(int $dirId): array
    {
        return curl_fetch(
            'https://op.jinritemai.com/doc/external/open/queryDocArticleList',
            [
                'dirId' => $dirId,
                'orderType' => 3,
                'pageIndex' => 0,
                'pageSize' => 9999,
                'status' => 1
            ]
        );
    }

    /**
     * fetch doc detail
     * @param int $articleId
     * @return array
     */
    public function fetchDocApi(int $articleId): array
    {
        return curl_fetch(
            'https://op.jinritemai.com/doc/external/open/queryDocArticleDetail',
            [
                'articleId' => $articleId,
                'onlyView' => false,
            ]
        );
    }
}

class Name
{
    /**
     * 过滤字符串
     * @param string $value
     * @return string
     */
    public static function filter(string $value): string
    {
        $charArr = [];

        $len = strlen($value);

        for ($i = 0; $i < $len; $i++) {
            $char = ord($value[$i]);

            if (($char >= 48 && $char <= 57)
                || ($char >= 97 && $char <= 122)
                || ($char >= 65 && $char <= 90)
                || $char === 95) {
                $charArr[] = $value[$i];
            }
        }
        return join('', $charArr);
    }

    /**
     * @param string $value
     * @return string
     */
    public static function methodName(string $value): string
    {
        $value = self::filter($value);

        $words = explode(' ', str_replace(['-', '_'], ' ', $value));

        $studlyWords = array_map(function ($word) {
            return ucfirst($word);
        }, $words);

        return lcfirst(implode($studlyWords));
    }

    /**
     * @param string $value
     * @return string
     */
    public static function className(string $value): string
    {
        return ucfirst(static::methodName($value));
    }
}

class Main
{
    /**
     * @var CodeSpace
     */
    protected CodeSpace $codeSpace;

    /**
     * @var FetchDoc
     */
    protected FetchDoc $fetchDoc;

    /**
     * @return void
     */
    public static function run()
    {
        $static = new static();

        $static->do();
    }

    public function __construct()
    {
        $this->codeSpace = new CodeSpace();

        $this->fetchDoc = new FetchDoc();
    }

    /**
     * main
     * @return void
     */
    public function do()
    {
        $menus = $this->fetchDoc->fetchDocMenus();

        foreach (Arr::get($menus, 'data.dirs', []) as $item) {
            $apis = $this->fetchDoc->fetchDocApis(Arr::get($item, 'id'));

            $articles = Arr::get($apis, 'data.articles', []);

            $this->codeSpace->push(
                $this->createCodeSpace(
                    $item,
                    $articles
                )
            );
        }
    }

    /**
     * @param array $section
     * @param array $articles
     * @return CodeSelf
     */
    protected function createCodeSpace(array $section, array $articles): CodeSelf
    {
        $code = new CodeSelf();

        $code->className = Name::className($this->reckonClsName($articles));

        $code->annotate = Arr::get($section, 'name', '');

        foreach ($articles as $article) {
            $apiArticle = $this->fetchDoc->fetchDocApi(
                Arr::get($article, 'id')
            );

            $subSelf = $this->createCodeMethod(
                $section,
                Arr::get($apiArticle, 'data.article', [])
            );

            if ($subSelf->service) {
                $code->methods[] = $this->createCodeMethod(
                    $section,
                    Arr::get($apiArticle, 'data.article', [])
                );
            }
        }

        $this->codeSpace->push($code);

        return $code;
    }

    /**
     * @param array $section
     * @param array $article
     * @return CodeSubSelf
     */
    protected function createCodeMethod(array $section, array $article): CodeSubSelf
    {
        $subSelf = new CodeSubSelf();

        $content = Arr::get($article, 'content');

        if (strpos($content, 'TreeTable') !== false) {
            preg_match(
                '/"demoValue":"([^"]*)"/',
                Arr::get($article, 'content'),
                $match
            );

            $subSelf->service = Arr::get($match, 1);
        } elseif (strpos(Arr::get($article, 'content'), '|--|--|') !== false) {
            $parts = explode(PHP_EOL, $content);

            $flag = false;

            $pos = 0;

            foreach ($parts as $key => $line) {
                if (mb_strpos($line, '公共参数') !== false) {
                    $pos = $key;
                }

                if ($pos && $key == $pos + 1) {
                    $flag = true;
                }

                if ($flag && '' == $line) {
                    $flag = false;
                }

                if ($flag) {
                    if ($key === $pos + 3) {
                        $parts = explode('|', trim($line, '|'));

                        $subSelf->service = trim($parts[3]);
                    }
                }
            }
        } else {
            $content = json_decode(
                $content,
                true,
                512,
                JSON_INVALID_UTF8_SUBSTITUTE
            );

            $subSelf->service = Arr::get($content, 'request.publicParam.0.example');
        }

        $subSelf->method = 'POST';

        $subSelf->path = Arr::get($article, 'info.title');

        $subSelf->name = Name::methodName(
            str_replace('.', '_', $subSelf->service)
        );

        $subSelf->docUri = sprintf(
            'https://op.jinritemai.com/docs/api-docs/%d/%d',
            Arr::get($section, 'id'),
            Arr::get($article, 'info.id')
        );

        $subSelf->annotate = Arr::get($article, 'info.subtitle');

        return $subSelf;
    }

    /**
     * @param array $articles
     * @return false|int|string
     */
    protected function reckonClsName(array $articles): string
    {
        $titles = array_map(function ($article) {
            $title = trim(Arr::get($article, 'title', ''), '/');

            $parts = explode('/', $title);

            return $parts ? $parts[0] : '';
        }, $articles);

        $titleCountValues = array_count_values($titles);

        arsort($titleCountValues);

        return current(array_keys($titleCountValues));
    }

    /**
     * @return string[]
     */
    protected function refreshAnnotate(): array
    {
        $queue = $this->codeSpace->toQueue();

        $targets = [];
        do {
            /**
             * @var CodeSelf $code
             */
            $code = $queue->pop();

            $targets[] = Name::methodName($code->className);
        } while (!$queue->isEmpty());

        $targets = array_unique($targets);

        $metaMethods = array_map(function ($target) {
            $name = ucfirst($target);
            $interface = sprintf('Request\\%s\\%sInterface', $name, $name);
            $method = lcfirst($target);
            return ' * @method ' . $interface . ' ' . $method . '()';
        }, $targets);

        array_unshift($metaMethods, ' * @method Verify verify()');

        $metaAnnotate = '/**' . "\n";
        $metaAnnotate .= join("\n", $metaMethods) . "\n";
        $metaAnnotate .= ' */';

        global $src_path;

        $metaFile = $src_path . '/Application.php';

        require_once $metaFile;

        $ref = new ReflectionClass(\Lackoxygen\TiktokShop\Application::class);

        $content = file_get_contents($metaFile);

        file_put_contents($metaFile, str_replace($ref->getDocComment(), $metaAnnotate, $content));

        return $metaMethods;
    }

    /**
     * @param array $metas
     * @return void
     */
    protected function createFacade(array $metas)
    {
        $facade = <<<FACADE
<?php

namespace Lackoxygen\TiktokShop\Facade;

use Lackoxygen\TiktokShop\Request;
use Illuminate\Support\Facades\Facade;
use Lackoxygen\TiktokShop\Support\Verify;
use Lackoxygen\TiktokShop\Application;

\${ANNOTATE}

class TiktokShop extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return Application::class;
    }
}
FACADE;

        $keyword = '@method';

        $metas = array_map(function ($meta) use ($keyword) {
            $pos = strpos($meta, $keyword);

            $left = substr($meta, 0, $pos + strlen($keyword));

            $right = substr($meta, $pos + strlen($keyword));

            return $left . ' static' . $right;
        }, $metas);

        array_unshift(
            $metas,
            ' * @method static Application setAccessToken(string $accessToken)',
            ' * @method static Application use ($options)'
        );

        $metaAnnotate = '/**' . "\n";
        $metaAnnotate .= join("\n", $metas) . "\n";
        $metaAnnotate .= ' */';

        $facadeContent = replaces(['${ANNOTATE}' => $metaAnnotate], $facade);

        global $src_path;

        file_put_contents(
            $src_path . '/Facade/TiktokShop.php',
            $facadeContent
        );
    }

    protected function fixStyle()
    {
        global $app_path;

        $cs = $app_path . '/vendor/bin/php-cs-fixer';

        if (!file_exists($cs)) {
            return;
        }

        $directory = $app_path . '/src';

        `{$cs} fix --quiet {$directory} --rules=@PSR12 > /dev/null`;
    }

    public function __destruct()
    {
        $this->codeSpace->write();

        $metas = $this->refreshAnnotate();

        $this->createFacade($metas);

        $this->fixStyle();

        println('success!');
    }
}

class CodeSpace
{
    protected SplQueue $spaces;

    protected CodeWriter $writer;

    public function __construct()
    {
        $this->spaces = new SplQueue();

        $this->writer = new CodeWriter();
    }

    public function push(CodeSelf $codeSelf)
    {
        $this->spaces->push($codeSelf);
    }

    public function write()
    {
        $this->writer->batchWrite($this->toQueue());
    }

    public function toQueue(): SplQueue
    {
        return clone $this->spaces;
    }
}

class CodeWriter
{
    /**
     * @param SplQueue $queue
     * @return void
     */
    public function batchWrite(SplQueue $queue)
    {
        do {
            $code = $queue->pop();

            $this->write($code);
        } while (!$queue->isEmpty());
    }

    /**
     * @param CodeSelf $codeSelf
     * @return void
     */
    public function write(CodeSelf $codeSelf)
    {
        $interface = new CodeGenerateInterface(
            clone $codeSelf
        );

        $class = new CodeGenerateClass(
            clone $codeSelf,
            $interface->toArray()['name']
        );

        global $src_path;

        $baseDir = $src_path . '/Request';

        $directory = $baseDir . '/' . $class->toArray()['name'];

        if (!is_dir($directory)) {
            @mkdir($directory);
        }

        file_put_contents(
            $directory . '/' . $interface->toArray()['file'],
            $interface
        );

        file_put_contents(
            $directory . '/' . $class->toArray()['file'],
            $class
        );
    }
}


class CodeGenerateInterface
{
    protected static string $template = <<<temp
<?php
namespace Lackoxygen\TiktokShop\Request\\\${SECTION};

use Lackoxygen\TiktokShop\Response\ResultSet;

/**
 * @note \${ANNOTATE}
 */
interface \${NAME}Interface
{
\${METHOD}
}
temp;

    protected string $content = '';

    protected CodeSelf $codeSelf;

    /**
     * @param CodeSelf $codeSelf
     */
    public function __construct(CodeSelf $codeSelf)
    {
        $methods = [];

        /**
         * @var CodeSubSelf $method
         */
        foreach ($codeSelf->methods as $method) {
            $methods[] = $this->generateMethod($method);
        }

        $this->content = replaces(
            [
                '${SECTION}' => $codeSelf->className,
                '${ANNOTATE}' => $codeSelf->annotate,
                '${NAME}' => $codeSelf->className,
                '${METHOD}' => join(
                    PHP_EOL . PHP_EOL,
                    array_map(function ($method) {
                        return join(PHP_EOL, $method);
                    }, $methods)
                )
            ],
            static::$template
        );

        $this->codeSelf = $codeSelf;
    }

    /**
     * @param CodeSubSelf $subSelf
     * @return array
     */
    protected function generateMethod(CodeSubSelf $subSelf): array
    {
        $template[] = "\t" . '/**';
        $template[] = "\t" . ' * ' . $subSelf->annotate;
        $template[] = "\t" . ' * @link ' . $subSelf->docUri;
        $template[] = "\t" . ' * @param array $params';
        $template[] = "\t" . ' * @return ResultSet';
        $template[] = "\t" . ' */';
        $template[] = "\t" . 'function ' . $subSelf->name . '(array $params = []);';

        return $template;
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->content;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        $name = $this->codeSelf->className . 'Interface';

        return [
            'name' => $name,
            'file' => $name . '.php',
            'content' => $this->content,
        ];
    }
}

class CodeGenerateClass
{
    protected static string $template = <<<temp
<?php

namespace Lackoxygen\TiktokShop\Request\\\${SECTION};

use Lackoxygen\TiktokShop\Request\Request;

class \${NAME} extends Request implements \${INTERFACE}
{
\${METHOD}
}
temp;

    protected string $content = '';

    protected CodeSelf $codeSelf;

    protected string $interface = '';

    public function __construct(CodeSelf $codeSelf, string $interface)
    {
        $this->codeSelf = $codeSelf;

        $this->interface = $interface;

        $methods = [];

        /**
         * @var CodeSubSelf $method
         */
        foreach ($codeSelf->methods as $method) {
            $methods[] = $this->generateMethod($method);
        }

        $this->content = replaces(
            [
                '${SECTION}' => $codeSelf->className,
                '${ANNOTATE}' => $codeSelf->annotate,
                '${INTERFACE}' => $this->interface,
                '${NAME}' => $codeSelf->className,
                '${METHOD}' => join(
                    PHP_EOL . PHP_EOL,
                    array_map(function ($method) {
                        return join(PHP_EOL, $method);
                    }, $methods)
                )
            ],
            static::$template
        );
    }

    /**
     * @param CodeSubSelf $subSelf
     * @return array
     */
    protected function generateMethod(CodeSubSelf $subSelf): array
    {
        $template[] = "\t" . '/**';
        $template[] = "\t" . ' * @inheritDoc';
        $template[] = "\t" . ' */';
        $template[] = "\t" . 'function ' . $subSelf->name . '(array $params = [])';
        $template[] = "\t" . '{';
        $template[] = "\t\t" . '$this->builder->method(\'' . $subSelf->method . '\')';
        $template[] = "\t\t\t" . '->service(\'' . $subSelf->service . '\')';
        $template[] = "\t\t\t" . '->path(\'' . $subSelf->path . '\')';
        $template[] = "\t\t\t" . '->params($params);';
        $template[] = "\t" . '}';

        return $template;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->content;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'name' => $this->codeSelf->className,
            'file' => $this->codeSelf->className . '.php',
            'content' => $this->content,
        ];
    }
}

class CodeSelf
{
    /**
     * @var string
     */
    public string $className = '';

    /**
     * @var string
     */
    public string $annotate = '';

    /**
     * @var array [] $methods
     */
    public array $methods = [];
}

class CodeSubSelf
{
    /**
     * @var string
     */
    public string $docUri = '';

    /**
     * @var string
     */
    public string $name = '';

    /**
     * @var string
     */
    public string $method = '';

    /**
     * @var string
     */
    public string $service = '';

    /**
     * @var string
     */
    public string $path = '';

    /**
     * @var string
     */
    public string $annotate = '';
}

Main::run();
