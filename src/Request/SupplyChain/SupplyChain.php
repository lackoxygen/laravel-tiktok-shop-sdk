<?php

namespace Lackoxygen\TiktokShop\Request\SupplyChain;

use Lackoxygen\TiktokShop\Request\Request;

class SupplyChain extends Request implements SupplyChainInterface
{
    /**
     * @inheritDoc
     */
    public function supplyChainGetOrderByOrderNo(array $params = [])
    {
        $this->builder->method('POST')
            ->service('supplyChain.getOrderByOrderNo')
            ->path('/supplyChain/getOrderByOrderNo')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function supplyChainUpdateConsign(array $params = [])
    {
        $this->builder->method('POST')
            ->service('supplyChain.updateConsign')
            ->path('/supplyChain/updateConsign')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function supplyChainSupplyConsign(array $params = [])
    {
        $this->builder->method('POST')
            ->service('supplyChain.supplyConsign')
            ->path('/supplyChain/supplyConsign')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function supplyChainGetSupplyOrderList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('supplyChain.getSupplyOrderList')
            ->path('/supplyChain/getSupplyOrderList')
            ->params($params);
    }
}
