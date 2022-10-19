<?php

namespace Lackoxygen\TiktokShop\Request\Order;

use Lackoxygen\TiktokShop\Response\ResultSet;

/**
 * @note 订单API
 */
interface OrderInterface
{
    /**
     * 订单列表查询
     * @link https://op.jinritemai.com/docs/api-docs/15/1342
     * @param array $params
     * @return ResultSet
     */
    public function orderSearchList(array $params = []);

    /**
     * 订单详情查询
     * @link https://op.jinritemai.com/docs/api-docs/15/1343
     * @param array $params
     * @return ResultSet
     */
    public function orderOrderDetail(array $params = []);

    /**
     * 批量解密接口
     * @link https://op.jinritemai.com/docs/api-docs/15/982
     * @param array $params
     * @return ResultSet
     */
    public function orderBatchDecrypt(array $params = []);

    /**
     * 为商家提供订单备注接口
     * @link https://op.jinritemai.com/docs/api-docs/15/568
     * @param array $params
     * @return ResultSet
     */
    public function orderAddOrderRemark(array $params = []);

    /**
     * 支持调用后打开（或关闭）卖家针对买家收货地址变更的审核流程
     * @link https://op.jinritemai.com/docs/api-docs/15/500
     * @param array $params
     * @return ResultSet
     */
    public function orderAddressAppliedSwitch(array $params = []);

    /**
     * 卖家主动修改收货地址
     * @link https://op.jinritemai.com/docs/api-docs/15/290
     * @param array $params
     * @return ResultSet
     */
    public function orderAddressModify(array $params = []);

    /**
     * 批量加密接口
     * @link https://op.jinritemai.com/docs/api-docs/15/487
     * @param array $params
     * @return ResultSet
     */
    public function orderBatchEncrypt(array $params = []);

    /**
     * 批量脱敏接口
     * @link https://op.jinritemai.com/docs/api-docs/15/508
     * @param array $params
     * @return ResultSet
     */
    public function orderBatchSensitive(array $params = []);

    /**
     * 发票信息回传
     * @link https://op.jinritemai.com/docs/api-docs/15/892
     * @param array $params
     * @return ResultSet
     */
    public function orderStockUp(array $params = []);

    /**
     * 订单商品的序列号上传
     * @link https://op.jinritemai.com/docs/api-docs/15/1289
     * @param array $params
     * @return ResultSet
     */
    public function orderAddSerialNumber(array $params = []);

    /**
     * 查询明文手机号报备接口
     * @link https://op.jinritemai.com/docs/api-docs/15/1550
     * @param array $params
     * @return ResultSet
     */
    public function orderOrdeReportList(array $params = []);

    /**
     * 商家回传订单审核结果
     * @link https://op.jinritemai.com/docs/api-docs/15/1785
     * @param array $params
     * @return ResultSet
     */
    public function orderReview(array $params = []);

    /**
     * 三方卡券延期
     * @link https://op.jinritemai.com/docs/api-docs/15/1730
     * @param array $params
     * @return ResultSet
     */
    public function couponsExtendCertValidEndByOrder(array $params = []);

    /**
     * 回复服务请求
     * @link https://op.jinritemai.com/docs/api-docs/15/1917
     * @param array $params
     * @return ResultSet
     */
    public function orderReplyService(array $params = []);

    /**
     * 按用户id查询订单简要信息
     * @link https://op.jinritemai.com/docs/api-docs/15/1915
     * @param array $params
     * @return ResultSet
     */
    public function orderGetUserOrderList(array $params = []);

    /**
     * 查看商家开票列表
     * @link https://op.jinritemai.com/docs/api-docs/15/1842
     * @param array $params
     * @return ResultSet
     */
    public function orderInvoiceList(array $params = []);

    /**
     * 用户在ISV查看订单、下载订单时, 上报事件到风控系统
     * @link https://op.jinritemai.com/docs/api-docs/15/1841
     * @param array $params
     * @return ResultSet
     */
    public function antispamOrderQuery(array $params = []);

    /**
     * 支持使用在ISV系统商户发送（外部系统或模块，如快递平台）场景
     * @link https://op.jinritemai.com/docs/api-docs/15/1840
     * @param array $params
     * @return ResultSet
     */
    public function antispamOrderSend(array $params = []);

    /**
     * 批量获取索引串接口
     * @link https://op.jinritemai.com/docs/api-docs/15/1839
     * @param array $params
     * @return ResultSet
     */
    public function orderBatchSearchIndex(array $params = []);

    /**
     * 获取App对于商家订单修改地址的审核权限
     * @link https://op.jinritemai.com/docs/api-docs/15/1838
     * @param array $params
     * @return ResultSet
     */
    public function orderAddresSwitchConfig(array $params = []);

    /**
     * 买家地址变更确认
     * @link https://op.jinritemai.com/docs/api-docs/15/1836
     * @param array $params
     * @return ResultSet
     */
    public function orderAddressConfirm(array $params = []);

    /**
     * 未支付订单改货款
     * @link https://op.jinritemai.com/docs/api-docs/15/1833
     * @param array $params
     * @return ResultSet
     */
    public function orderUpdateOrderAmount(array $params = []);

    /**
     * 获取服务单列表
     * @link https://op.jinritemai.com/docs/api-docs/15/1835
     * @param array $params
     * @return ResultSet
     */
    public function orderGetServiceList(array $params = []);

    /**
     * 查询商家服务单详情请求
     * @link https://op.jinritemai.com/docs/api-docs/15/1832
     * @param array $params
     * @return ResultSet
     */
    public function orderServiceDetail(array $params = []);

    /**
     * 未支付订单邮费修改
     * @link https://op.jinritemai.com/docs/api-docs/15/1834
     * @param array $params
     * @return ResultSet
     */
    public function orderUpdatePostAmount(array $params = []);

    /**
     * isv获取虚拟号通话状态申请
     * @link https://op.jinritemai.com/docs/api-docs/15/2072
     * @param array $params
     * @return ResultSet
     */
    public function powerSubscribeVirtualTelCallStatus(array $params = []);

    /**
     * 获取跨境承运单信息
     * @link https://op.jinritemai.com/docs/api-docs/15/1939
     * @param array $params
     * @return ResultSet
     */
    public function orderGetCrossBorderFulfillInfo(array $params = []);
}
