<?php

namespace Lackoxygen\TiktokShop\Request\Logistics;

use Lackoxygen\TiktokShop\Request\Request;

class Logistics extends Request implements LogisticsInterface
{
    /**
     * @inheritDoc
     */
    public function logisticsAppendSubOrder(array $params = [])
    {
        $this->builder->method('POST')
            ->service('logistics.appendSubOrder')
            ->path('/logistics/appendSubOrder')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function orderLogisticsCompanyList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('order.logisticsCompanyList')
            ->path('/order/logisticsCompanyList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function orderLogisticsAdd(array $params = [])
    {
        $this->builder->method('POST')
            ->service('order.logisticsAdd')
            ->path('/order/logisticsAdd')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function orderLogisticsEdit(array $params = [])
    {
        $this->builder->method('POST')
            ->service('order.logisticsEdit')
            ->path('/order/logisticsEdit')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function orderLogisticsEditByPack(array $params = [])
    {
        $this->builder->method('POST')
            ->service('order.logisticsEditByPack')
            ->path('/order/logisticsEditByPack')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function orderLogisticsAddMultiPack(array $params = [])
    {
        $this->builder->method('POST')
            ->service('order.logisticsAddMultiPack')
            ->path('/order/logisticsAddMultiPack')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function freightTemplateList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('freightTemplate.list')
            ->path('/freightTemplate/list')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function orderLogisticsAddSinglePack(array $params = [])
    {
        $this->builder->method('POST')
            ->service('order.logisticsAddSinglePack')
            ->path('/order/logisticsAddSinglePack')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function logisticsUpdateOrder(array $params = [])
    {
        $this->builder->method('POST')
            ->service('logistics.updateOrder')
            ->path('/logistics/updateOrder')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function logisticsCancelOrder(array $params = [])
    {
        $this->builder->method('POST')
            ->service('logistics.cancelOrder')
            ->path('/logistics/cancelOrder')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function crossBorderOrderOperate(array $params = [])
    {
        $this->builder->method('POST')
            ->service('crossBorder.orderOperate')
            ->path('/crossBorder/orderOperate')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function crossborderOrderCustomClearance(array $params = [])
    {
        $this->builder->method('POST')
            ->service('crossborder.orderCustomClearance')
            ->path('/crossborder/orderCustomClearance')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function crossborderOrderLogisticsTrace(array $params = [])
    {
        $this->builder->method('POST')
            ->service('crossborder.orderLogisticsTrace')
            ->path('/crossborder/orderLogisticsTrace')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function logisticsCustomTemplateList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('logistics.customTemplateList')
            ->path('/logistics/customTemplateList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function logisticsGetOutRange(array $params = [])
    {
        $this->builder->method('POST')
            ->service('logistics.getOutRange')
            ->path('/logistics/getOutRange')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function crossBorderOrderConfirm(array $params = [])
    {
        $this->builder->method('POST')
            ->service('crossBorder.orderConfirm')
            ->path('/crossBorder/orderConfirm')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function logisticsTemplateList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('logistics.templateList')
            ->path('/logistics/templateList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function logisticsWaybillApply(array $params = [])
    {
        $this->builder->method('POST')
            ->service('logistics.waybillApply')
            ->path('/logistics/waybillApply')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function logisticsDeliveryNotice(array $params = [])
    {
        $this->builder->method('POST')
            ->service('logistics.deliveryNotice')
            ->path('/logistics/deliveryNotice')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function powerIsByteDancePackage(array $params = [])
    {
        $this->builder->method('POST')
            ->service('power.isByteDancePackage')
            ->path('/power/isByteDancePackage')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function powerPushFirstSortCode(array $params = [])
    {
        $this->builder->method('POST')
            ->service('power.pushFirstSortCode')
            ->path('/power/pushFirstSortCode')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function powerPushCustomSortCode(array $params = [])
    {
        $this->builder->method('POST')
            ->service('power.pushCustomSortCode')
            ->path('/power/pushCustomSortCode')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function powerPushThirdSortCode(array $params = [])
    {
        $this->builder->method('POST')
            ->service('power.pushThirdSortCode')
            ->path('/power/pushThirdSortCode')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function logisticsNewCreateOrder(array $params = [])
    {
        $this->builder->method('POST')
            ->service('logistics.newCreateOrder')
            ->path('/logistics/newCreateOrder')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function logisticsQueryPackageRoute(array $params = [])
    {
        $this->builder->method('POST')
            ->service('logistics.queryPackageRoute')
            ->path('/logistics/queryPackageRoute')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function logisticsRegisterPackageRoute(array $params = [])
    {
        $this->builder->method('POST')
            ->service('logistics.registerPackageRoute')
            ->path('/logistics/registerPackageRoute')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function powerUpdateCollectTime(array $params = [])
    {
        $this->builder->method('POST')
            ->service('power.updateCollectTime')
            ->path('/power/updateCollectTime')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function freightTemplateUpdate(array $params = [])
    {
        $this->builder->method('POST')
            ->service('freightTemplate.update')
            ->path('/freightTemplate/update')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function freightTemplateCreate(array $params = [])
    {
        $this->builder->method('POST')
            ->service('freightTemplate.create')
            ->path('/freightTemplate/create')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function powerPickupCodeCallback(array $params = [])
    {
        $this->builder->method('POST')
            ->service('power.pickupCodeCallback')
            ->path('/power/pickupCodeCallback')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function logisticsGetDesignTemplateList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('logistics.getDesignTemplateList')
            ->path('/logistics/getDesignTemplateList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function powerVirtualServicePushCallRecord(array $params = [])
    {
        $this->builder->method('POST')
            ->service('power.virtualServicePushCallRecord')
            ->path('/power/virtualServicePushCallRecord')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function logisticsGetCustomTemplateList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('logistics.getCustomTemplateList')
            ->path('/logistics/getCustomTemplateList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function logisticsTrackNoRouteDetail(array $params = [])
    {
        $this->builder->method('POST')
            ->service('logistics.trackNoRouteDetail')
            ->path('/logistics/trackNoRouteDetail')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function dutyFreeOrderOperate(array $params = [])
    {
        $this->builder->method('POST')
            ->service('dutyFree.orderOperate')
            ->path('/dutyFree/orderOperate')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function crossBorderOrderList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('crossBorder.orderList')
            ->path('/crossBorder/orderList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function logisticsListShopNetsite(array $params = [])
    {
        $this->builder->method('POST')
            ->service('logistics.listShopNetsite')
            ->path('/logistics/listShopNetsite')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function addressGetProvince(array $params = [])
    {
        $this->builder->method('POST')
            ->service('address.getProvince')
            ->path('/address/getProvince')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function addressGetAreasByProvince(array $params = [])
    {
        $this->builder->method('POST')
            ->service('address.getAreasByProvince')
            ->path('/address/getAreasByProvince')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function freightTemplateDetail(array $params = [])
    {
        $this->builder->method('POST')
            ->service('freightTemplate.detail')
            ->path('/freightTemplate/detail')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function crossBorderReceiveReceiptOfCustomsWayBill(array $params = [])
    {
        $this->builder->method('POST')
            ->service('crossBorder.receiveReceiptOfCustomsWayBill')
            ->path('/crossBorder/receiveReceiptOfCustomsWayBill')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function logisticsUpdateTerminalOrder(array $params = [])
    {
        $this->builder->method('POST')
            ->service('logistics.updateTerminalOrder')
            ->path('/logistics/updateTerminalOrder')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function powerHandleVirtualTelConnect(array $params = [])
    {
        $this->builder->method('POST')
            ->service('power.HandleVirtualTelConnect')
            ->path('/power/HandleVirtualTelConnect')
            ->params($params);
    }
}
