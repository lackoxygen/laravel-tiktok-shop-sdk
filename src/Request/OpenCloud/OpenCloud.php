<?php

namespace Lackoxygen\TiktokShop\Request\OpenCloud;

use Lackoxygen\TiktokShop\Request\Request;

class OpenCloud extends Request implements OpenCloudInterface
{
    /**
     * @inheritDoc
     */
    public function openCloudDdpGetShopList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('openCloud.ddpGetShopList')
            ->path('/openCloud/ddpGetShopList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function openCloudDdpDeleteShop(array $params = [])
    {
        $this->builder->method('POST')
            ->service('openCloud.ddpDeleteShop')
            ->path('/openCloud/ddpDeleteShop')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function openCloudDdpAddShop(array $params = [])
    {
        $this->builder->method('POST')
            ->service('openCloud.ddpAddShop')
            ->path('/openCloud/ddpAddShop')
            ->params($params);
    }
}
