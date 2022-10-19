<?php

namespace Lackoxygen\TiktokShop\Attribute;

use Lackoxygen\TiktokShop\Attribute\Config\Config;

class Request extends Config
{
    /**
     * @var string
     */
    private string $service = '';

    /**
     * @var string
     */
    private string $timestamp = '';

    /**
     * @var string
     */
    private string $v = '2';

    /**
     * @var string
     */
    private string $method = 'GET';

    /**
     * @var array
     */
    private array $params = [];

    /**
     * @var string
     */
    protected string $path = '';

    /**
     * @var bool
     */
    private bool $signature = true;

    /**
     * @return string
     */
    public function getService(): string
    {
        return $this->service;
    }

    /**
     * @param mixed $service
     */
    public function setService($service): void
    {
        $this->service = $service;
    }

    /**
     * @return string
     */
    public function getTimestamp(): string
    {
        return $this->timestamp ?: date('Y-m-d H:i:s');
    }

    /**
     * @param mixed $timestamp
     */
    public function setTimestamp($timestamp): void
    {
        $this->timestamp = $timestamp;
    }

    /**
     * @return string
     */
    public function getV(): string
    {
        return $this->v;
    }

    /**
     * @param mixed $v
     */
    public function setV($v): void
    {
        $this->v = $v;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @param mixed $method
     */
    public function setMethod($method): void
    {
        $this->method = $method;
    }


    /**
     * @return array
     */
    public function getParams(): array
    {
        return $this->params;
    }

    /**
     * @param mixed $params
     */
    public function setParams(array $params): void
    {
        $this->params = $params;
    }

    /**
     * @return bool
     */
    public function isSignature(): bool
    {
        return $this->signature;
    }

    /**
     * @param bool $signature
     */
    public function setSignature(bool $signature): void
    {
        $this->signature = $signature;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @param string $path
     */
    public function setPath(string $path): void
    {
        $this->path = $path;
    }
}
