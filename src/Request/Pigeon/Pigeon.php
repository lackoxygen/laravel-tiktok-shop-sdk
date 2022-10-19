<?php

namespace Lackoxygen\TiktokShop\Request\Pigeon;

use Lackoxygen\TiktokShop\Request\Request;

class Pigeon extends Request implements PigeonInterface
{
    /**
     * @inheritDoc
     */
    public function pigeonWorkOrderNotify(array $params = [])
    {
        $this->builder->method('POST')
            ->service('pigeon.workOrderNotify')
            ->path('/pigeon/workOrderNotify')
            ->params($params);
    }
}
