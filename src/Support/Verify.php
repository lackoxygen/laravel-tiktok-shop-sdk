<?php

namespace Lackoxygen\TiktokShop\Support;

use Lackoxygen\TiktokShop\Attribute\Config\Config;

class Verify extends Config
{
    /**
     * @param $sign
     * @param string $body
     * @return bool
     */
    public function md5($sign, string $body): bool
    {
        $md5 = md5(
            $this->config->getAppKey() .
            $body .
            $this->config->getAppSecret()
        );
        return $md5 === $sign;
    }
}
