<?php

namespace Lackoxygen\TiktokShop\Attribute\Config;

class Config
{
    /**
     * @var Option
     */
    protected Option $config;

    /**
     * @param Option $option
     */
    public function __construct(Option $option)
    {
        $this->config = $option;
    }

    /**
     * @return Option
     */
    public function getConfig(): Option
    {
        return clone $this->config;
    }
}
