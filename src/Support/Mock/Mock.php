<?php

namespace Lackoxygen\TiktokShop\Support\Mock;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\RequestOptions;
use Lackoxygen\TiktokShop\Exception\ClientException;
use Lackoxygen\TiktokShop\Exception\MockException;
use Lackoxygen\TiktokShop\Util\Json;

class Mock
{
    /**
     * @var string
     */
    protected string $request;

    /**
     * @var string
     */
    protected string $method;

    /**
     * @var Annotation
     */
    protected Annotation $annotation;

    /**
     * @param string $request
     * @param string $method
     */
    public function __construct(string $request, string $method)
    {
        $this->request = $request;

        $this->method = $method;

        $this->annotation = new Annotation();
    }


    /**
     * @param string $url
     * @return Response
     * @throws ClientException
     * @throws MockException
     */
    protected function request(string $url): Response
    {
        if (empty($url)) {
            throw new MockException('Unable to simulate data, no document address provided');
        }
        $pathInfo = parse_url($url, PHP_URL_PATH);

        $pathParts = explode('/', $pathInfo);

        $articleId = end($pathParts);

        $client = new Client([
            'base_uri' => 'https://op.jinritemai.com'
        ]);

        try {
            $response = $client->get('doc/external/open/queryDocArticleDetail', [
                RequestOptions::QUERY => [
                    'articleId' => $articleId,
                    'onlyView' => false
                ]
            ]);
        } catch (GuzzleException $e) {
            throw new ClientException($e);
        }

        $content = $response->getBody()->getContents();

        $array = Json::unmarshal($content);

        if (0 !== $array['code']) {
            throw new MockException(sprintf('Abnormal response error, %s', $array['message']));
        }

        $articleContent = Json::unmarshal($array['data']['article']['content']);

        return new Response(
            200,
            ['server' => 'mock', 'version' => $array['data']['article']['info']['version']],
            new Stream($articleContent['demo']['responseDemo']['responseSuccess'])
        );
    }

    /**
     * @return Response
     */
    public function response(): Response
    {
        $methodAnnotation = $this->annotation->method(
            $this->request,
            $this->method
        );

        $url = $this->extractUrlAnnotation(
            $methodAnnotation
        );

        try {
            $response = $this->request($url);
        } catch (ClientException|MockException $e) {
            return new Response(
                500,
                ['server' => 'mock'],
                new Stream($e->getMessage())
            );
        }

        return $response;
    }

    /**
     * @param array $methodAnnotation
     * @return false|mixed
     */
    protected function extractUrlAnnotation(array $methodAnnotation)
    {
        $tag = '@link';

        $line = $methodAnnotation[$tag] ?? [];

        return $line ? $line[0] : false;
    }
}
