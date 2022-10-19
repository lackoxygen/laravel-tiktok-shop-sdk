<?php

namespace Lackoxygen\TiktokShop\Attribute\Config;

class Option
{
    /**
     * @var string
     */
    private string $appKey;

    /**
     * @var string
     */
    private string $appSecret;

    /**
     * @var bool
     */
    private bool $enableMock;

    /**
     * @var string
     */
    private string $baseUri;

    /**
     * @var string
     */
    private string $accessToken = '';

    /**
     * @var float
     */
    private float $timeout;

    /**
     * @param string $appKey
     * @param string $appSecret
     * @param string $baseUri
     * @param float $timeout
     * @param bool $enableMock
     */
    public function __construct(
        string $appKey = '',
        string $appSecret = '',
        string $baseUri = '',
        float $timeout = 30.0,
        bool $enableMock = false
    ) {
        $this->appKey = $appKey;
        $this->appSecret = $appSecret;
        $this->baseUri = $baseUri;
        $this->timeout = $timeout;
        $this->enableMock = $enableMock;
    }

    /**
     * @param mixed $appKey
     */
    public function setAppKey(string $appKey): void
    {
        $this->appKey = $appKey;
    }

    /**
     * @return string
     */
    public function getAppKey(): ?string
    {
        return $this->appKey;
    }

    /**
     * @param mixed $appSecret
     */
    public function setAppSecret($appSecret): void
    {
        $this->appSecret = $appSecret;
    }

    /**
     * @return string
     */
    public function getAppSecret(): ?string
    {
        return $this->appSecret;
    }

    /**
     * @param bool $enableMock
     */
    public function setEnableMock(bool $enableMock): void
    {
        $this->enableMock = $enableMock;
    }

    /**
     * @return bool
     */
    public function isEnableMock(): bool
    {
        return $this->enableMock;
    }


    /**
     * @param string $baseUri
     */
    public function setBaseUri(string $baseUri): void
    {
        $this->baseUri = $baseUri;
    }

    /**
     * @return string
     */
    public function getBaseUri(): string
    {
        return $this->baseUri;
    }

    /**
     * @param string $accessToken
     */
    public function setAccessToken(string $accessToken): void
    {
        $this->accessToken = $accessToken;
    }

    /**
     * @return string
     */
    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    /**
     * @param float $timeout
     */
    public function setTimeout(float $timeout): void
    {
        $this->timeout = $timeout;
    }

    /**
     * @return float
     */
    public function getTimeout(): float
    {
        return $this->timeout;
    }
}
