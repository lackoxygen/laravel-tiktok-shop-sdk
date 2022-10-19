<?php

namespace Lackoxygen\TiktokShop\Request\Crossborder;

use Lackoxygen\TiktokShop\Request\Request;

class Crossborder extends Request implements CrossborderInterface
{
    /**
     * @inheritDoc
     */
    public function dutyFreeOrderList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('dutyFree.orderList')
            ->path('/dutyFree/orderList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function crossborderStockTaking(array $params = [])
    {
        $this->builder->method('POST')
            ->service('crossborder.stockTaking')
            ->path('/crossborder/stockTaking')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function crossborderStockTransform(array $params = [])
    {
        $this->builder->method('POST')
            ->service('crossborder.stockTransform')
            ->path('/crossborder/stockTransform')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function crossborderOrderInterception(array $params = [])
    {
        $this->builder->method('POST')
            ->service('crossborder.OrderInterception')
            ->path('/crossborder/OrderInterception')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function crossborderTakingLogisticsInfo(array $params = [])
    {
        $this->builder->method('POST')
            ->service('crossborder.takingLogisticsInfo')
            ->path('/crossborder/takingLogisticsInfo')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function crossborderWarehouseInOutboundEvent(array $params = [])
    {
        $this->builder->method('POST')
            ->service('crossborder.warehouseInOutboundEvent')
            ->path('/crossborder/warehouseInOutboundEvent')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function crossBorderGetTradeOrderStatus(array $params = [])
    {
        $this->builder->method('POST')
            ->service('crossBorder.getTradeOrderStatus')
            ->path('/crossBorder/getTradeOrderStatus')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function crossBorderCustomsTaxInfo(array $params = [])
    {
        $this->builder->method('POST')
            ->service('crossBorder.customsTaxInfo')
            ->path('/crossBorder/customsTaxInfo')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function dutyFreeOrderConfirm(array $params = [])
    {
        $this->builder->method('POST')
            ->service('dutyFree.orderConfirm')
            ->path('/dutyFree/orderConfirm')
            ->params($params);
    }
}
