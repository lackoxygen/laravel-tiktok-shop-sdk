<?php

namespace Lackoxygen\TiktokShop\Request\Recycle;

use Lackoxygen\TiktokShop\Request\Request;

class Recycle extends Request implements RecycleInterface
{
    /**
     * @inheritDoc
     */
    public function recycleBuyerGetOrderList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('recycle.buyerGetOrderList')
            ->path('/recycle/buyerGetOrderList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function recycleBuyerGetOrderDetail(array $params = [])
    {
        $this->builder->method('POST')
            ->service('recycle.buyerGetOrderDetail')
            ->path('/recycle/buyerGetOrderDetail')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function shopSetFinalPayment(array $params = [])
    {
        $this->builder->method('POST')
            ->service('shop.setFinalPayment')
            ->path('/shop/setFinalPayment')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function recycleApplyChangePrice(array $params = [])
    {
        $this->builder->method('POST')
            ->service('recycle.applyChangePrice')
            ->path('/recycle/applyChangePrice')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function recycleLogisticsBack(array $params = [])
    {
        $this->builder->method('POST')
            ->service('recycle.logisticsBack')
            ->path('/recycle/logisticsBack')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function recycleSellSucceed(array $params = [])
    {
        $this->builder->method('POST')
            ->service('recycle.sellSucceed')
            ->path('/recycle/sellSucceed')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function recycleChangePrice(array $params = [])
    {
        $this->builder->method('POST')
            ->service('recycle.changePrice')
            ->path('/recycle/changePrice')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function recycleQualityTestingResult(array $params = [])
    {
        $this->builder->method('POST')
            ->service('recycle.qualityTestingResult')
            ->path('/recycle/qualityTestingResult')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function recycleConfirmReceive(array $params = [])
    {
        $this->builder->method('POST')
            ->service('recycle.confirmReceive')
            ->path('/recycle/confirmReceive')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function recycleCreatePrice(array $params = [])
    {
        $this->builder->method('POST')
            ->service('recycle.createPrice')
            ->path('/recycle/createPrice')
            ->params($params);
    }
}
