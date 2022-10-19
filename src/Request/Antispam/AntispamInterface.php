<?php

namespace Lackoxygen\TiktokShop\Request\Antispam;

use Lackoxygen\TiktokShop\Response\ResultSet;

/**
 * @note 风控安全API
 */
interface AntispamInterface
{
    /**
     * 商户登陆风险检查
     * @link https://op.jinritemai.com/docs/api-docs/187/635
     * @param array $params
     * @return ResultSet
     */
    public function antispamUserLogin(array $params = []);
}
