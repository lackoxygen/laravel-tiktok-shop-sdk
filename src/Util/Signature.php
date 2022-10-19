<?php

namespace Lackoxygen\TiktokShop\Util;

class Signature
{
    private string $appKey;

    private string $appSecret;

    private string $method;

    private string $timestamp;

    private string $paramJson;

    private string $version;

    /**
     * @param mixed $appKey
     */
    public function setAppKey(string $appKey): Signature
    {
        $this->appKey = $appKey;
        return $this;
    }

    /**
     * @param mixed $method
     */
    public function setMethod($method): Signature
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @param mixed $timestamp
     */
    public function setTimestamp($timestamp): Signature
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * @param mixed $appSecret
     */
    public function setAppSecret($appSecret): Signature
    {
        $this->appSecret = $appSecret;
        return $this;
    }

    /**
     * @param mixed $paramJson
     */
    public function setParamJson($paramJson): Signature
    {
        $this->paramJson = $paramJson;
        return $this;
    }

    /**
     * @param mixed $version
     */
    public function setVersion($version): Signature
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return false|string
     */
    public function generate()
    {
        $paramPattern = 'app_key' . $this->appKey . 'method' .
            $this->method . 'param_json' . $this->paramJson .
            'timestamp' . $this->timestamp . 'v' . $this->version;
        $signPattern = $this->appSecret . $paramPattern . $this->appSecret;
        return hash_hmac("sha256", $signPattern, $this->appSecret);
    }
}
