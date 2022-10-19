<?php

namespace Lackoxygen\TiktokShop\Request\Recycle;

use Lackoxygen\TiktokShop\Response\ResultSet;

/**
 * @note 回收寄卖API
 */
interface RecycleInterface
{
    /**
     * 拉取订单列表接口
     * @link https://op.jinritemai.com/docs/api-docs/68/914
     * @param array $params
     * @return ResultSet
     */
    public function recycleBuyerGetOrderList(array $params = []);

    /**
     * 获得订单详情
     * @link https://op.jinritemai.com/docs/api-docs/68/915
     * @param array $params
     * @return ResultSet
     */
    public function recycleBuyerGetOrderDetail(array $params = []);

    /**
     * 设置尾款信息
     * @link https://op.jinritemai.com/docs/api-docs/68/1659
     * @param array $params
     * @return ResultSet
     */
    public function shopSetFinalPayment(array $params = []);

    /**
     * 回收商申请调价
     * @link https://op.jinritemai.com/docs/api-docs/68/1887
     * @param array $params
     * @return ResultSet
     */
    public function recycleApplyChangePrice(array $params = []);

    /**
     * 回收商退货发货
     * @link https://op.jinritemai.com/docs/api-docs/68/1889
     * @param array $params
     * @return ResultSet
     */
    public function recycleLogisticsBack(array $params = []);

    /**
     * 寄售成功
     * @link https://op.jinritemai.com/docs/api-docs/68/1888
     * @param array $params
     * @return ResultSet
     */
    public function recycleSellSucceed(array $params = []);

    /**
     * 回收商在用户确认前调整报价接口
     * @link https://op.jinritemai.com/docs/api-docs/68/1886
     * @param array $params
     * @return ResultSet
     */
    public function recycleChangePrice(array $params = []);

    /**
     * 回传质检通过和价格
     * @link https://op.jinritemai.com/docs/api-docs/68/1885
     * @param array $params
     * @return ResultSet
     */
    public function recycleQualityTestingResult(array $params = []);

    /**
     * 回收商确认收货操作
     * @link https://op.jinritemai.com/docs/api-docs/68/1884
     * @param array $params
     * @return ResultSet
     */
    public function recycleConfirmReceive(array $params = []);

    /**
     * 上传估价
     * @link https://op.jinritemai.com/docs/api-docs/68/1883
     * @param array $params
     * @return ResultSet
     */
    public function recycleCreatePrice(array $params = []);
}
