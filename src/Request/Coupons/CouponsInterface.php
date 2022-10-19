<?php

namespace Lackoxygen\TiktokShop\Request\Coupons;

use Lackoxygen\TiktokShop\Response\ResultSet;

/**
 * @note 卡券API
 */
interface CouponsInterface
{
    /**
     * 卡券取消核销接口
     * @link https://op.jinritemai.com/docs/api-docs/52/668
     * @param array $params
     * @return ResultSet
     */
    public function couponsCancelVerify(array $params = []);

    /**
     * 卡券废弃接口
     * @link https://op.jinritemai.com/docs/api-docs/52/669
     * @param array $params
     * @return ResultSet
     */
    public function couponsAbandon(array $params = []);

    /**
     * 卡券同步
     * @link https://op.jinritemai.com/docs/api-docs/52/712
     * @param array $params
     * @return ResultSet
     */
    public function couponsSyncV2(array $params = []);

    /**
     * 卡券核销接口V2版本
     * @link https://op.jinritemai.com/docs/api-docs/52/797
     * @param array $params
     * @return ResultSet
     */
    public function couponsVerifyV2(array $params = []);

    /**
     * 卡券核销次数更新
     * @link https://op.jinritemai.com/docs/api-docs/52/900
     * @param array $params
     * @return ResultSet
     */
    public function couponsCertVerifyUpdate(array $params = []);

    /**
     * 三方卡券列表查询
     * @link https://op.jinritemai.com/docs/api-docs/52/369
     * @param array $params
     * @return ResultSet
     */
    public function orderSettle(array $params = []);
}
