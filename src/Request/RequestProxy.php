<?php

namespace Lackoxygen\TiktokShop\Request;

use Lackoxygen\TiktokShop\Attribute\Config\Config;
use Lackoxygen\TiktokShop\Attribute\Config\Option;
use Lackoxygen\TiktokShop\Exception\ClientException;
use Lackoxygen\TiktokShop\Response\ResultSet;

class RequestProxy extends Config
{
    /**
     * @var string
     */
    protected string $request;

    /**
     * @param Option $config
     * @param string $request
     */
    protected function __construct(Option $config, string $request)
    {
        parent::__construct($config);

        $this->request = $request;
    }

    /**
     * @param string $request
     * @param Option $config
     * @return RequestProxy
     */
    public static function proxy(string $request, Option $config): RequestProxy
    {
        return new self($config, $request);
    }

    /**
     * @throws ClientException
     */
    public function __call($name, $arguments): ResultSet
    {
        /**
         * @var Request $request
         */
        $request = new $this->request($this->config, $name);

        $result = call_user_func_array([$request, $name], $arguments);

        if (!is_null($result)) {
            return new ResultSet($result);
        }

        return new ResultSet($request());
    }
}
