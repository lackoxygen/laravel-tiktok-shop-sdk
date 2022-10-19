<?php

namespace Lackoxygen\TiktokShop\Request\OrderCode;

use Lackoxygen\TiktokShop\Request\Request;

class OrderCode extends Request implements OrderCodeInterface
{
    /**
     * @inheritDoc
     */
    public function orderCodeErpShopBindOrderCode(array $params = [])
    {
        $this->builder->method('POST')
            ->service('orderCode.erpShopBindOrderCode')
            ->path('/orderCode/erpShopBindOrderCode')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function orderCodeBatchGetOrderCodeByShop(array $params = [])
    {
        $this->builder->method('POST')
            ->service('orderCode.batchGetOrderCodeByShop')
            ->path('/orderCode/batchGetOrderCodeByShop')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function orderCodeDownloadOrderCodeByShop(array $params = [])
    {
        $this->builder->method('POST')
            ->service('orderCode.downloadOrderCodeByShop')
            ->path('/orderCode/downloadOrderCodeByShop')
            ->params($params);
    }
}
