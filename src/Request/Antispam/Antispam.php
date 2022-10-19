<?php

namespace Lackoxygen\TiktokShop\Request\Antispam;

use Lackoxygen\TiktokShop\Request\Request;

class Antispam extends Request implements AntispamInterface
{
    /**
     * @inheritDoc
     */
    public function antispamUserLogin(array $params = [])
    {
        $this->builder->method('POST')
            ->service('antispam.userLogin')
            ->path('/antispam/userLogin')
            ->params($params);
    }
}
