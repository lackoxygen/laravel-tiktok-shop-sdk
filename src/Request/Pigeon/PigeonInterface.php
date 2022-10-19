<?php

namespace Lackoxygen\TiktokShop\Request\Pigeon;

use Lackoxygen\TiktokShop\Response\ResultSet;

/**
 * @note 飞鸽API
 */
interface PigeonInterface
{
    /**
     * 更新或者存储工单
     * @link https://op.jinritemai.com/docs/api-docs/188/1974
     * @param array $params
     * @return ResultSet
     */
    public function pigeonWorkOrderNotify(array $params = []);
}
