<?php

namespace Lackoxygen\TiktokShop\Request\Token;

use Lackoxygen\TiktokShop\Request\Request;

class Token extends Request implements TokenInterface
{
    /**
     * @inheritDoc
     */
    public function rightsInfo(array $params = [])
    {
        $this->builder->method('POST')
            ->service('rights.info')
            ->path('/rights/info')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function tokenRefresh(array $params = [])
    {
        $this->builder->method('POST')
            ->service('token.refresh')
            ->path('/token/refresh')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function tokenCreate(array $params = [])
    {
        $this->builder->method('POST')
            ->service('token.create')
            ->path('/token/create')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function securityBatchReportOrderSecurityEvent(array $params = [])
    {
        $this->builder->method('POST')
            ->service('security.batchReportOrderSecurityEvent')
            ->path('/security/batchReportOrderSecurityEvent')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function openAppIpWhiteListAdd(array $params = [])
    {
        $this->builder->method('POST')
            ->service('open.appIpWhiteListAdd')
            ->path('/open/appIpWhiteListAdd')
            ->params($params);
    }
}
