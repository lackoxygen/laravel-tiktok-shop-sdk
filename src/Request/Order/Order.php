<?php

namespace Lackoxygen\TiktokShop\Request\Order;

use Lackoxygen\TiktokShop\Request\Request;

class Order extends Request implements OrderInterface
{
    /**
     * @inheritDoc
     */
    public function orderSearchList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('order.searchList')
            ->path('/order/searchList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function orderOrderDetail(array $params = [])
    {
        $this->builder->method('POST')
            ->service('order.orderDetail')
            ->path('/order/orderDetail')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function orderBatchDecrypt(array $params = [])
    {
        $this->builder->method('POST')
            ->service('order.batchDecrypt')
            ->path('/order/batchDecrypt')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function orderAddOrderRemark(array $params = [])
    {
        $this->builder->method('POST')
            ->service('order.addOrderRemark')
            ->path('/order/addOrderRemark')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function orderAddressAppliedSwitch(array $params = [])
    {
        $this->builder->method('POST')
            ->service('order.AddressAppliedSwitch')
            ->path('/order/AddressAppliedSwitch')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function orderAddressModify(array $params = [])
    {
        $this->builder->method('POST')
            ->service('order.addressModify')
            ->path('/order/addressModify')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function orderBatchEncrypt(array $params = [])
    {
        $this->builder->method('POST')
            ->service('order.batchEncrypt')
            ->path('/order/batchEncrypt')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function orderBatchSensitive(array $params = [])
    {
        $this->builder->method('POST')
            ->service('order.batchSensitive')
            ->path('/order/batchSensitive')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function orderStockUp(array $params = [])
    {
        $this->builder->method('POST')
            ->service('order.stockUp')
            ->path('/order/invoiceUpload')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function orderAddSerialNumber(array $params = [])
    {
        $this->builder->method('POST')
            ->service('order.addSerialNumber')
            ->path('/order/addSerialNumber')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function orderOrdeReportList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('order.ordeReportList')
            ->path('/order/ordeReportList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function orderReview(array $params = [])
    {
        $this->builder->method('POST')
            ->service('order.review')
            ->path('/order/review')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function couponsExtendCertValidEndByOrder(array $params = [])
    {
        $this->builder->method('POST')
            ->service('coupons.extendCertValidEndByOrder')
            ->path('/coupons/extendCertValidEndByOrder')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function orderReplyService(array $params = [])
    {
        $this->builder->method('POST')
            ->service('order.replyService')
            ->path('/order/replyService')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function orderGetUserOrderList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('order.getUserOrderList')
            ->path('/order/getUserOrderList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function orderInvoiceList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('order.invoiceList')
            ->path('/order/invoiceList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function antispamOrderQuery(array $params = [])
    {
        $this->builder->method('POST')
            ->service('antispam.orderQuery')
            ->path('/antispam/orderQuery')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function antispamOrderSend(array $params = [])
    {
        $this->builder->method('POST')
            ->service('antispam.orderSend')
            ->path('/antispam/orderSend')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function orderBatchSearchIndex(array $params = [])
    {
        $this->builder->method('POST')
            ->service('order.BatchSearchIndex')
            ->path('/order/BatchSearchIndex')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function orderAddresSwitchConfig(array $params = [])
    {
        $this->builder->method('POST')
            ->service('order.addresSwitchConfig')
            ->path('/order/addresSwitchConfig')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function orderAddressConfirm(array $params = [])
    {
        $this->builder->method('POST')
            ->service('order.addressConfirm')
            ->path('/order/addressConfirm')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function orderUpdateOrderAmount(array $params = [])
    {
        $this->builder->method('POST')
            ->service('order.updateOrderAmount')
            ->path('/order/updateOrderAmount')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function orderGetServiceList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('order.getServiceList')
            ->path('/order/getServiceList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function orderServiceDetail(array $params = [])
    {
        $this->builder->method('POST')
            ->service('order.serviceDetail')
            ->path('/order/serviceDetail')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function orderUpdatePostAmount(array $params = [])
    {
        $this->builder->method('POST')
            ->service('order.updatePostAmount')
            ->path('/order/updatePostAmount')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function powerSubscribeVirtualTelCallStatus(array $params = [])
    {
        $this->builder->method('POST')
            ->service('power.SubscribeVirtualTelCallStatus')
            ->path('/power/SubscribeVirtualTelCallStatus')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function orderGetCrossBorderFulfillInfo(array $params = [])
    {
        $this->builder->method('POST')
            ->service('order.getCrossBorderFulfillInfo')
            ->path('/order/getCrossBorderFulfillInfo')
            ->params($params);
    }
}
