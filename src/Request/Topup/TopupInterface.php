<?php

namespace Lackoxygen\TiktokShop\Request\Topup;

use Lackoxygen\TiktokShop\Response\ResultSet;

/**
 * @note 虚拟充值API
 */
interface TopupInterface
{
    /**
     * 商家充值结果回调
     * @link https://op.jinritemai.com/docs/api-docs/164/1639
     * @param array $params
     * @return ResultSet
     */
    public function topupResult(array $params = []);

    /**
     * 获取叶子类目可选的账号模板id
     * @link https://op.jinritemai.com/docs/api-docs/164/1638
     * @param array $params
     * @return ResultSet
     */
    public function topupAccountTemplateList(array $params = []);
}
