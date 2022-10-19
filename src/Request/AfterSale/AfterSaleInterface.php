<?php

namespace Lackoxygen\TiktokShop\Request\AfterSale;

use Lackoxygen\TiktokShop\Response\ResultSet;

/**
 * @note 售后退款API
 */
interface AfterSaleInterface
{
    /**
     * 售后审核接口聚合版
     * @link https://op.jinritemai.com/docs/api-docs/17/560
     * @param array $params
     * @return ResultSet
     */
    public function afterSaleOperate(array $params = []);

    /**
     * 提供给商家获取售后单详情信息
     * @link https://op.jinritemai.com/docs/api-docs/17/1095
     * @param array $params
     * @return ResultSet
     */
    public function afterSaleDetail(array $params = []);

    /**
     * 售后列表接口
     * @link https://op.jinritemai.com/docs/api-docs/17/1295
     * @param array $params
     * @return ResultSet
     */
    public function afterSaleList(array $params = []);

    /**
     * 店家给售后单添加备注
     * @link https://op.jinritemai.com/docs/api-docs/17/585
     * @param array $params
     * @return ResultSet
     */
    public function afterSaleAddOrderRemark(array $params = []);

    /**
     * 打开售后通道，使用户可以发起超级售后
     * @link https://op.jinritemai.com/docs/api-docs/17/764
     * @param array $params
     * @return ResultSet
     */
    public function afterSaleOpenAfterSaleChannel(array $params = []);

    /**
     * 商家确认是否收到换货
     * @link https://op.jinritemai.com/docs/api-docs/17/768
     * @param array $params
     * @return ResultSet
     */
    public function afterSaleBuyerExchangeConfirm(array $params = []);

    /**
     * 申请物流拦截
     * @link https://op.jinritemai.com/docs/api-docs/17/897
     * @param array $params
     * @return ResultSet
     */
    public function afterSaleApplyLogisticsIntercept(array $params = []);

    /**
     * 商家在未发货仅退款途中发送取消发货的状态
     * @link https://op.jinritemai.com/docs/api-docs/17/816
     * @param array $params
     * @return ResultSet
     */
    public function afterSaleCancelSendGoodsSuccess(array $params = []);

    /**
     * 商家确认售后单对应的用户退货入仓成功
     * @link https://op.jinritemai.com/docs/api-docs/17/815
     * @param array $params
     * @return ResultSet
     */
    public function afterSaleReturnGoodsToWareHouseSuccess(array $params = []);

    /**
     * 售后单列表查询推荐使用/afterSale/List
     * @link https://op.jinritemai.com/docs/api-docs/17/254
     * @param array $params
     * @return ResultSet
     */
    public function tradeRefundListSearch(array $params = []);

    /**
     * 商家延时收获接口
     * @link https://op.jinritemai.com/docs/api-docs/17/770
     * @param array $params
     * @return ResultSet
     */
    public function afterSaleTimeExtend(array $params = []);

    /**
     * 商家处理换货请求接口
     * @link https://op.jinritemai.com/docs/api-docs/17/769
     * @param array $params
     * @return ResultSet
     */
    public function afterSaleBuyerExchange(array $params = []);

    /**
     * 售后审核处理原因列表查询接口
     * @link https://op.jinritemai.com/docs/api-docs/17/1540
     * @param array $params
     * @return ResultSet
     */
    public function afterSaleRejectReasonCodeList(array $params = []);

    /**
     * 售后商家发货
     * @link https://op.jinritemai.com/docs/api-docs/17/1908
     * @param array $params
     * @return ResultSet
     */
    public function afterSaleFillLogistics(array $params = []);
}
