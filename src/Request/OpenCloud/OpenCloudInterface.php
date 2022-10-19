<?php

namespace Lackoxygen\TiktokShop\Request\OpenCloud;

use Lackoxygen\TiktokShop\Response\ResultSet;

/**
 * @note 电商云API
 */
interface OpenCloudInterface
{
    /**
     * 数据推送，推送店铺列表
     * @link https://op.jinritemai.com/docs/api-docs/158/1404
     * @param array $params
     * @return ResultSet
     */
    public function openCloudDdpGetShopList(array $params = []);

    /**
     * 数据推送，删除绑定的推送店铺
     * @link https://op.jinritemai.com/docs/api-docs/158/1403
     * @param array $params
     * @return ResultSet
     */
    public function openCloudDdpDeleteShop(array $params = []);

    /**
     * 数据推送，添加数据推送店铺
     * @link https://op.jinritemai.com/docs/api-docs/158/1402
     * @param array $params
     * @return ResultSet
     */
    public function openCloudDdpAddShop(array $params = []);
}
