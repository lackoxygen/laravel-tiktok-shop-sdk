<?php

namespace Lackoxygen\TiktokShop\Request\OrderCode;

use Lackoxygen\TiktokShop\Response\ResultSet;

/**
 * @note BIC质检API
 */
interface OrderCodeInterface
{
    /**
     * bic流程订单商家发货接口
     * @link https://op.jinritemai.com/docs/api-docs/51/806
     * @param array $params
     * @return ResultSet
     */
    public function orderCodeErpShopBindOrderCode(array $params = []);

    /**
     * 批量下载bic订单码
     * @link https://op.jinritemai.com/docs/api-docs/51/1872
     * @param array $params
     * @return ResultSet
     */
    public function orderCodeBatchGetOrderCodeByShop(array $params = []);

    /**
     * 下载bic订单码
     * @link https://op.jinritemai.com/docs/api-docs/51/1871
     * @param array $params
     * @return ResultSet
     */
    public function orderCodeDownloadOrderCodeByShop(array $params = []);
}
