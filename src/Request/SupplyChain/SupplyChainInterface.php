<?php

namespace Lackoxygen\TiktokShop\Request\SupplyChain;

use Lackoxygen\TiktokShop\Response\ResultSet;

/**
 * @note 供销平台API
 */
interface SupplyChainInterface
{
    /**
     * 根据供货单号查询详情
     * @link https://op.jinritemai.com/docs/api-docs/172/1738
     * @param array $params
     * @return ResultSet
     */
    public function supplyChainGetOrderByOrderNo(array $params = []);

    /**
     * 供货单更新发货物流
     * @link https://op.jinritemai.com/docs/api-docs/172/1735
     * @param array $params
     * @return ResultSet
     */
    public function supplyChainUpdateConsign(array $params = []);

    /**
     * 供货单发货
     * @link https://op.jinritemai.com/docs/api-docs/172/1733
     * @param array $params
     * @return ResultSet
     */
    public function supplyChainSupplyConsign(array $params = []);

    /**
     * 供货单列表查询
     * @link https://op.jinritemai.com/docs/api-docs/172/1732
     * @param array $params
     * @return ResultSet
     */
    public function supplyChainGetSupplyOrderList(array $params = []);
}
