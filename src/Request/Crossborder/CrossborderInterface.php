<?php

namespace Lackoxygen\TiktokShop\Request\Crossborder;

use Lackoxygen\TiktokShop\Response\ResultSet;

/**
 * @note 跨境API
 */
interface CrossborderInterface
{
    /**
     * 商家拉单
     * @link https://op.jinritemai.com/docs/api-docs/53/703
     * @param array $params
     * @return ResultSet
     */
    public function dutyFreeOrderList(array $params = []);

    /**
     * 库存盘点回告
     * @link https://op.jinritemai.com/docs/api-docs/53/883
     * @param array $params
     * @return ResultSet
     */
    public function crossborderStockTaking(array $params = []);

    /**
     * 库存类型变动回告
     * @link https://op.jinritemai.com/docs/api-docs/53/918
     * @param array $params
     * @return ResultSet
     */
    public function crossborderStockTransform(array $params = []);

    /**
     * 服务商锁单结果回告
     * @link https://op.jinritemai.com/docs/api-docs/53/920
     * @param array $params
     * @return ResultSet
     */
    public function crossborderOrderInterception(array $params = []);

    /**
     * 运单信息回告
     * @link https://op.jinritemai.com/docs/api-docs/53/1293
     * @param array $params
     * @return ResultSet
     */
    public function crossborderTakingLogisticsInfo(array $params = []);

    /**
     * 入库和提货出库回告
     * @link https://op.jinritemai.com/docs/api-docs/53/1205
     * @param array $params
     * @return ResultSet
     */
    public function crossborderWarehouseInOutboundEvent(array $params = []);

    /**
     * 获取交易订单状态
     * @link https://op.jinritemai.com/docs/api-docs/53/1650
     * @param array $params
     * @return ResultSet
     */
    public function crossBorderGetTradeOrderStatus(array $params = []);

    /**
     * 服务商回告海关税费
     * @link https://op.jinritemai.com/docs/api-docs/53/1761
     * @param array $params
     * @return ResultSet
     */
    public function crossBorderCustomsTaxInfo(array $params = []);

    /**
     * 商家接单
     * @link https://op.jinritemai.com/docs/api-docs/53/1873
     * @param array $params
     * @return ResultSet
     */
    public function dutyFreeOrderConfirm(array $params = []);
}
