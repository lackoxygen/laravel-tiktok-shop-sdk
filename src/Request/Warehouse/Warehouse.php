<?php

namespace Lackoxygen\TiktokShop\Request\Warehouse;

use Lackoxygen\TiktokShop\Request\Request;

class Warehouse extends Request implements WarehouseInterface
{
    /**
     * @inheritDoc
     */
    public function skuStockNum(array $params = [])
    {
        $this->builder->method('POST')
            ->service('sku.stockNum')
            ->path('/sku/stockNum')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function skuSyncStock(array $params = [])
    {
        $this->builder->method('POST')
            ->service('sku.syncStock')
            ->path('/sku/syncStock')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function warehouseadjustInventory(array $params = [])
    {
        $this->builder->method('POST')
            ->service('/warehouse/adjustInventory')
            ->path('/warehouse/adjustInventory')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function skuSyncStockBatch(array $params = [])
    {
        $this->builder->method('POST')
            ->service('sku.syncStockBatch')
            ->path('/sku/syncStockBatch')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function warehouseSetFence(array $params = [])
    {
        $this->builder->method('POST')
            ->service('warehouse.setFence')
            ->path('/warehouse/setFence')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function warehouseGetFences(array $params = [])
    {
        $this->builder->method('POST')
            ->service('warehouse.getFences')
            ->path('/warehouse/getFences')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function warehouseCreateFence(array $params = [])
    {
        $this->builder->method('POST')
            ->service('warehouse.createFence')
            ->path('/warehouse/createFence')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function warehouseUnbindFences(array $params = [])
    {
        $this->builder->method('POST')
            ->service('warehouse.unbindFences')
            ->path('/warehouse/unbindFences')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function warehouseRemoveAddr(array $params = [])
    {
        $this->builder->method('POST')
            ->service('warehouse.removeAddr')
            ->path('/warehouse/removeAddr')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function promiseSetSkuShipTime(array $params = [])
    {
        $this->builder->method('POST')
            ->service('promise.setSkuShipTime')
            ->path('/promise/setSkuShipTime')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function warehouseInfo(array $params = [])
    {
        $this->builder->method('POST')
            ->service('warehouse.info')
            ->path('/warehouse/info')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function warehouseEdit(array $params = [])
    {
        $this->builder->method('POST')
            ->service('warehouse.edit')
            ->path('/warehouse/edit')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function warehouseCreate(array $params = [])
    {
        $this->builder->method('POST')
            ->service('warehouse.create')
            ->path('/warehouse/create')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function warehouseSetAddr(array $params = [])
    {
        $this->builder->method('POST')
            ->service('warehouse.setAddr')
            ->path('/warehouse/setAddr')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function warehouseList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('warehouse.list')
            ->path('/warehouse/list')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function warehouseSetAddrBatch(array $params = [])
    {
        $this->builder->method('POST')
            ->service('warehouse.setAddrBatch')
            ->path('/warehouse/setAddrBatch')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function warehouseCreateBatch(array $params = [])
    {
        $this->builder->method('POST')
            ->service('warehouse.createBatch')
            ->path('/warehouse/createBatch')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function warehouseSetPriority(array $params = [])
    {
        $this->builder->method('POST')
            ->service('warehouse.setPriority')
            ->path('/warehouse/setPriority')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function warehouseDelFence(array $params = [])
    {
        $this->builder->method('POST')
            ->service('warehouse.delFence')
            ->path('/warehouse/delFence')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function warehouseBindFences(array $params = [])
    {
        $this->builder->method('POST')
            ->service('warehouse.bindFences')
            ->path('/warehouse/bindFences')
            ->params($params);
    }
}
