<?php

namespace Lackoxygen\TiktokShop\Support\Client;

use GuzzleHttp\Exception\GuzzleException;
use Lackoxygen\TiktokShop\Attribute\Config\Config;
use Lackoxygen\TiktokShop\Attribute\Config\Option;
use Lackoxygen\TiktokShop\Attribute\Request;
use Lackoxygen\TiktokShop\Exception\ClientException;
use Lackoxygen\TiktokShop\Support\Mock\Mock;
use Psr\Http\Message\ResponseInterface;

class Builder extends Config
{
    /**
     * @var Request
     */
    protected Request $requestHandler;

    /**
     * @var string
     */
    protected string $request;

    /**
     * @var string
     */
    protected string $method;

    public function __construct(Option $config, string $request, string $method)
    {
        parent::__construct($config);
        $this->requestHandler = new Request($config);
        $this->request = $request;
        $this->method = $method;
    }

    /**
     * @param Option $config
     * @param string $passage
     * @param string $method
     * @return Builder
     */
    public static function create(Option $config, string $passage, string $method): Builder
    {
        return new static(...func_get_args());
    }

    /**
     * @param string $method
     * @return $this
     */
    public function method(string $method): Builder
    {
        $this->requestHandler->setMethod($method);
        return $this;
    }

    /**
     * @param array $params
     * @return $this
     */
    public function params(array $params): Builder
    {
        $this->requestHandler->setParams($params);
        return $this;
    }

    /**
     * @param string $v
     * @return $this
     */
    public function v(string $v): Builder
    {
        $this->requestHandler->setV($v);
        return $this;
    }

    /**
     * @param $timestamp
     * @return $this
     */
    public function timestamp($timestamp): Builder
    {
        $this->requestHandler->setTimestamp($timestamp);
        return $this;
    }

    /**
     * @param string|null $service
     * @return $this
     */
    public function service(?string $service): Builder
    {
        $this->requestHandler->setService($service);
        return $this;
    }

    /**
     * @param bool $signature
     * @return $this
     */
    public function signature(bool $signature): Builder
    {
        $this->requestHandler->setSignature($signature);
        return $this;
    }

    /**
     * @param string $path
     * @return $this
     */
    public function path(string $path): Builder
    {
        $this->requestHandler->setPath($path);
        return $this;
    }

    /**
     * @return Request
     */
    public function getRequest(): Request
    {
        return $this->requestHandler;
    }

    /**
     * @return ResponseInterface
     * @throws ClientException
     */
    public function request(): ResponseInterface
    {
        $client = Client::create();
        if ($this->config->isEnableMock()) {
            $mock = new Mock($this->request, $this->method);
            return $mock->response();
        }
        try {
            return $client->request($this->requestHandler);
        } catch (GuzzleException $e) {
            throw new ClientException($e);
        }
    }
}
