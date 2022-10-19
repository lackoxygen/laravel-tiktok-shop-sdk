<?php

namespace Lackoxygen\TiktokShop\Request\Yunc;

use Lackoxygen\TiktokShop\Request\Request;

class Yunc extends Request implements YuncInterface
{
    /**
     * @inheritDoc
     */
    public function yuncShopWarehouseRefQuery(array $params = [])
    {
        $this->builder->method('POST')
            ->service('yunc.shopWarehouseRefQuery')
            ->path('/yunc/shopWarehouseRefQuery')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function wmsOutboundDetailNotify(array $params = [])
    {
        $this->builder->method('POST')
            ->service('wms.outboundDetailNotify')
            ->path('/wms/outboundDetailNotify')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function yuncErpCargoSinglePush(array $params = [])
    {
        $this->builder->method('POST')
            ->service('yunc.erpCargoSinglePush')
            ->path('/yunc/erpCargoSinglePush')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function yuncWmsInboundCallback(array $params = [])
    {
        $this->builder->method('POST')
            ->service('yunc.wmsInboundCallback')
            ->path('/yunc/wmsInboundCallback')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function yuncCreateOutboundOrderToB(array $params = [])
    {
        $this->builder->method('POST')
            ->service('yunc.createOutboundOrderToB')
            ->path('/yunc/createOutboundOrderToB')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function yuncErpInboundCreate(array $params = [])
    {
        $this->builder->method('POST')
            ->service('yunc.erpInboundCreate')
            ->path('/yunc/erpInboundCreate')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function yuncCloudCreateOutboundOrder(array $params = [])
    {
        $this->builder->method('POST')
            ->service('yunc.cloudCreateOutboundOrder')
            ->path('/yunc/cloudCreateOutboundOrder')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function yuncCloudCancelOutboundOrder(array $params = [])
    {
        $this->builder->method('POST')
            ->service('yunc.cloudCancelOutboundOrder')
            ->path('/yunc/cloudCancelOutboundOrder')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function yuncCloudCreateInboundOrder(array $params = [])
    {
        $this->builder->method('POST')
            ->service('yunc.cloudCreateInboundOrder')
            ->path('/yunc/cloudCreateInboundOrder')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function yuncCancelOutboundOrderToB(array $params = [])
    {
        $this->builder->method('POST')
            ->service('yunc.cancelOutboundOrderToB')
            ->path('/yunc/cancelOutboundOrderToB')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function wmsDeliveryInfoNotify(array $params = [])
    {
        $this->builder->method('POST')
            ->service('wms.deliveryInfoNotify')
            ->path('/wms/deliveryInfoNotify')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function wmsInboundDetailNotify(array $params = [])
    {
        $this->builder->method('POST')
            ->service('wms.inboundDetailNotify')
            ->path('/wms/inboundDetailNotify')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function yuncCloudCreateOutboundOrderToB(array $params = [])
    {
        $this->builder->method('POST')
            ->service('yunc.CloudCreateOutboundOrderToB')
            ->path('/yunc/CloudCreateOutboundOrderToB')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function yuncCloudCreateInboundOrderToB(array $params = [])
    {
        $this->builder->method('POST')
            ->service('yunc.CloudCreateInboundOrderToB')
            ->path('/yunc/CloudCreateInboundOrderToB')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function yuncCloudCancelOutboundOrderToB(array $params = [])
    {
        $this->builder->method('POST')
            ->service('yunc.CloudCancelOutboundOrderToB')
            ->path('/yunc/CloudCancelOutboundOrderToB')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function yuncCloudCancelInboundOrderToB(array $params = [])
    {
        $this->builder->method('POST')
            ->service('yunc.CloudCancelInboundOrderToB')
            ->path('/yunc/CloudCancelInboundOrderToB')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function materialSearchMaterial(array $params = [])
    {
        $this->builder->method('POST')
            ->service('material.searchMaterial')
            ->path('/material/searchMaterial')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function yuncAdjustInventory(array $params = [])
    {
        $this->builder->method('POST')
            ->service('yunc.adjustInventory')
            ->path('/yunc/adjustInventory')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function yuncCloudCancelInboundOrder(array $params = [])
    {
        $this->builder->method('POST')
            ->service('yunc.cloudCancelInboundOrder')
            ->path('/yunc/cloudCancelInboundOrder')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function yuncPushOutboundFeedback(array $params = [])
    {
        $this->builder->method('POST')
            ->service('yunc.pushOutboundFeedback')
            ->path('/yunc/pushOutboundFeedback')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function storageNotifySaleReturnStatus(array $params = [])
    {
        $this->builder->method('POST')
            ->service('storage.notifySaleReturnStatus')
            ->path('/storage/notifySaleReturnStatus')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function yuncErpInboundCancel(array $params = [])
    {
        $this->builder->method('POST')
            ->service('yunc.erpInboundCancel')
            ->path('/yunc/erpInboundCancel')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function yuncSyncInventorySnapshot(array $params = [])
    {
        $this->builder->method('POST')
            ->service('yunc.syncInventorySnapshot')
            ->path('/yunc/syncInventorySnapshot')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function yuncSyncCollectInfo(array $params = [])
    {
        $this->builder->method('POST')
            ->service('yunc.syncCollectInfo')
            ->path('/yunc/syncCollectInfo')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function logisticsIndTrackPush(array $params = [])
    {
        $this->builder->method('POST')
            ->service('logistics.indTrackPush')
            ->path('/logistics/indTrackPush')
            ->params($params);
    }
}
