<?php

namespace Lackoxygen\TiktokShop\Util;

class Preg
{
    public static function annotation(string $docs)
    {
        preg_match_all('/@.*?/U', $docs, $matches);

        return $matches[0] ?? [];
    }


    public static function mergeSpaces($string)
    {
        return preg_replace("/\s(?=\s)/", "\\1", $string);
    }
}
