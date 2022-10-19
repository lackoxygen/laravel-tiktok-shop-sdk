<?php

namespace Lackoxygen\TiktokShop\Support\Mock;

use Lackoxygen\TiktokShop\Util\Json;

class Stream
{
    /**
     * @var string|false|mixed
     */
    protected string $content = '';

    /**
     * @param $content
     */
    public function __construct($content)
    {
        if (is_array($content)) {
            $content = Json::marshal($content);
        }
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->content;
    }
}
