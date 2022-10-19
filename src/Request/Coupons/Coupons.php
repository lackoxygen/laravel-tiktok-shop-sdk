<?php

namespace Lackoxygen\TiktokShop\Request\Coupons;

use Lackoxygen\TiktokShop\Request\Request;

class Coupons extends Request implements CouponsInterface
{
    /**
     * @inheritDoc
     */
    public function couponsCancelVerify(array $params = [])
    {
        $this->builder->method('POST')
            ->service('coupons.cancelVerify')
            ->path('/coupons/cancelVerify')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function couponsAbandon(array $params = [])
    {
        $this->builder->method('POST')
            ->service('coupons.abandon')
            ->path('/coupons/abandon')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function couponsSyncV2(array $params = [])
    {
        $this->builder->method('POST')
            ->service('coupons.syncV2')
            ->path('/coupons/syncV2')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function couponsVerifyV2(array $params = [])
    {
        $this->builder->method('POST')
            ->service('coupons.verifyV2')
            ->path('/coupons/verifyV2')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function couponsCertVerifyUpdate(array $params = [])
    {
        $this->builder->method('POST')
            ->service('coupons.certVerifyUpdate')
            ->path('/coupons/certVerifyUpdate')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function orderSettle(array $params = [])
    {
        $this->builder->method('POST')
            ->service('order.settle')
            ->path('/coupons/list')
            ->params($params);
    }
}
