<?php

namespace Lackoxygen\TiktokShop\Util;

class Json
{
    public static function marshal(array $array)
    {
        $flag = JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE;
        if (0 === count($array)) {
            $flag |= JSON_FORCE_OBJECT;
        }
        return \json_encode($array, $flag);
    }

    public static function unmarshal(string $value, $associative = true)
    {
        return \json_decode($value, $associative);
    }
}
