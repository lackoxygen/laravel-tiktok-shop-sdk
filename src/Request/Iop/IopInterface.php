<?php

namespace Lackoxygen\TiktokShop\Request\Iop;

use Lackoxygen\TiktokShop\Response\ResultSet;

/**
 * @note 代发API
 */
interface IopInterface
{
    /**
     * 【厂商】查询代打订单列表
     * @link https://op.jinritemai.com/docs/api-docs/59/673
     * @param array $params
     * @return ResultSet
     */
    public function iopOrderList(array $params = []);

    /**
     * 【厂商】电子面单取号
     * @link https://op.jinritemai.com/docs/api-docs/59/674
     * @param array $params
     * @return ResultSet
     */
    public function iopWaybillGet(array $params = []);

    /**
     * 【厂商】取消电子面单
     * @link https://op.jinritemai.com/docs/api-docs/59/675
     * @param array $params
     * @return ResultSet
     */
    public function iopWaybillCancel(array $params = []);

    /**
     * 【厂商】代发订单发货接口
     * @link https://op.jinritemai.com/docs/api-docs/59/676
     * @param array $params
     * @return ResultSet
     */
    public function iopWaybillReturn(array $params = []);

    /**
     * 【厂商】代发订单更新发货接口
     * @link https://op.jinritemai.com/docs/api-docs/59/677
     * @param array $params
     * @return ResultSet
     */
    public function iopWaybillUpdate(array $params = []);

    /**
     * 【厂商】订单详情
     * @link https://op.jinritemai.com/docs/api-docs/59/678
     * @param array $params
     * @return ResultSet
     */
    public function iopOrderInfo(array $params = []);

    /**
     * 【商家】分配代发订单
     * @link https://op.jinritemai.com/docs/api-docs/59/958
     * @param array $params
     * @return ResultSet
     */
    public function iopSellerDistribute(array $params = []);

    /**
     * 【商家】查看代发订单列表
     * @link https://op.jinritemai.com/docs/api-docs/59/960
     * @param array $params
     * @return ResultSet
     */
    public function iopSellerOrderList(array $params = []);

    /**
     * 【厂家】查询商家列表
     * @link https://op.jinritemai.com/docs/api-docs/59/1752
     * @param array $params
     * @return ResultSet
     */
    public function iopGetSellerList(array $params = []);

    /**
     * 【厂商】查询店铺身份
     * @link https://op.jinritemai.com/docs/api-docs/59/1874
     * @param array $params
     * @return ResultSet
     */
    public function iopRoleGet(array $params = []);

    /**
     * 【商家】取消分配代发订单
     * @link https://op.jinritemai.com/docs/api-docs/59/1876
     * @param array $params
     * @return ResultSet
     */
    public function iopSellerCancleDistribute(array $params = []);

    /**
     * 【商家】查询厂商管理列表
     * @link https://op.jinritemai.com/docs/api-docs/59/1799
     * @param array $params
     * @return ResultSet
     */
    public function iopSellerSupplierList(array $params = []);

    /**
     * 【商家】查看代发订单详情
     * @link https://op.jinritemai.com/docs/api-docs/59/1875
     * @param array $params
     * @return ResultSet
     */
    public function iopSellerOrderInfo(array $params = []);
}
