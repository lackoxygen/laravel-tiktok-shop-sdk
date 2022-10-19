<?php

namespace Lackoxygen\TiktokShop\Util;

class Sort
{
    public static function kSort(array &$arr)
    {
        $kString = true;
        foreach ($arr as $k => &$v) {
            if (!is_string($k)) {
                $kString = false;
            }
            if (is_array($v)) {
                self::kSort($v);
            }
        }
        if ($kString) {
            ksort($arr);
        }
    }
}
