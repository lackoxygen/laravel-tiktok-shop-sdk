<?php

namespace Lackoxygen\TiktokShop\Request\Topup;

use Lackoxygen\TiktokShop\Request\Request;

class Topup extends Request implements TopupInterface
{
    /**
     * @inheritDoc
     */
    public function topupResult(array $params = [])
    {
        $this->builder->method('POST')
            ->service('topup.result')
            ->path('/topup/result')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function topupAccountTemplateList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('topup.accountTemplateList')
            ->path('/topup/accountTemplateList')
            ->params($params);
    }
}
