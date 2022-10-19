<?php

namespace Lackoxygen\TiktokShop\Request;

use Lackoxygen\TiktokShop\Attribute\Config\Config;
use Lackoxygen\TiktokShop\Attribute\Config\Option;
use Lackoxygen\TiktokShop\Exception\ClientException;
use Lackoxygen\TiktokShop\Support\Client\Builder;
use Psr\Http\Message\ResponseInterface;

abstract class Request extends Config
{
    /**
     * @var Builder
     */
    protected Builder $builder;

    /**
     * @param Option $config
     * @param string $method
     */
    public function __construct(Option $config, string $method)
    {
        parent::__construct($config);

        $this->builder = Builder::create(
            $config,
            get_class($this),
            $method
        );
    }

    /**
     * @return ResponseInterface
     * @throws ClientException
     */
    public function __invoke(): ResponseInterface
    {
        return $this->builder->request();
    }
}
