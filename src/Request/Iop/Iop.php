<?php

namespace Lackoxygen\TiktokShop\Request\Iop;

use Lackoxygen\TiktokShop\Request\Request;

class Iop extends Request implements IopInterface
{
    /**
     * @inheritDoc
     */
    public function iopOrderList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('iop.orderList')
            ->path('/iop/orderList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function iopWaybillGet(array $params = [])
    {
        $this->builder->method('POST')
            ->service('iop.waybillGet')
            ->path('/iop/waybillGet')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function iopWaybillCancel(array $params = [])
    {
        $this->builder->method('POST')
            ->service('iop.waybillCancel')
            ->path('/iop/waybillCancel')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function iopWaybillReturn(array $params = [])
    {
        $this->builder->method('POST')
            ->service('iop.waybillReturn')
            ->path('/iop/waybillReturn')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function iopWaybillUpdate(array $params = [])
    {
        $this->builder->method('POST')
            ->service('iop.waybillUpdate')
            ->path('/iop/waybillUpdate')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function iopOrderInfo(array $params = [])
    {
        $this->builder->method('POST')
            ->service('iop.orderInfo')
            ->path('/iop/orderInfo')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function iopSellerDistribute(array $params = [])
    {
        $this->builder->method('POST')
            ->service('iop.sellerDistribute')
            ->path('/iop/sellerDistribute')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function iopSellerOrderList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('iop.sellerOrderList')
            ->path('/iop/sellerOrderList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function iopGetSellerList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('iop.getSellerList')
            ->path('/iop/getSellerList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function iopRoleGet(array $params = [])
    {
        $this->builder->method('POST')
            ->service('iop.roleGet')
            ->path('/iop/roleGet')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function iopSellerCancleDistribute(array $params = [])
    {
        $this->builder->method('POST')
            ->service('iop.sellerCancleDistribute')
            ->path('/iop/sellerCancleDistribute')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function iopSellerSupplierList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('iop.sellerSupplierList')
            ->path('/iop/sellerSupplierList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function iopSellerOrderInfo(array $params = [])
    {
        $this->builder->method('POST')
            ->service('iop.sellerOrderInfo')
            ->path('/iop/sellerOrderInfo')
            ->params($params);
    }
}
