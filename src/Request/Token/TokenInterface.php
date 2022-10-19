<?php

namespace Lackoxygen\TiktokShop\Request\Token;

use Lackoxygen\TiktokShop\Response\ResultSet;

/**
 * @note 工具API
 */
interface TokenInterface
{
    /**
     * 查询用户的应用权益
     * @link https://op.jinritemai.com/docs/api-docs/162/352
     * @param array $params
     * @return ResultSet
     */
    public function rightsInfo(array $params = []);

    /**
     * 刷新 token API
     * @link https://op.jinritemai.com/docs/api-docs/162/1601
     * @param array $params
     * @return ResultSet
     */
    public function tokenRefresh(array $params = []);

    /**
     * 生成token API
     * @link https://op.jinritemai.com/docs/api-docs/162/1600
     * @param array $params
     * @return ResultSet
     */
    public function tokenCreate(array $params = []);

    /**
     * 批量上报订单安全事件接口
     * @link https://op.jinritemai.com/docs/api-docs/162/1655
     * @param array $params
     * @return ResultSet
     */
    public function securityBatchReportOrderSecurityEvent(array $params = []);

    /**
     * 新增应用ip白名单
     * @link https://op.jinritemai.com/docs/api-docs/162/1818
     * @param array $params
     * @return ResultSet
     */
    public function openAppIpWhiteListAdd(array $params = []);
}
