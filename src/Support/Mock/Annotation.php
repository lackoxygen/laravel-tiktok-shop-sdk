<?php

namespace Lackoxygen\TiktokShop\Support\Mock;

use Lackoxygen\TiktokShop\Util\Preg;

class Annotation
{
    /**
     * @param $class
     * @param $method
     * @return array
     * @throws \ReflectionException
     */
    public function method($class, $method): array
    {
        $ref = new \ReflectionClass($class);

        $interfaces = $ref->getInterfaces();

        /**
         * @var \ReflectionClass $interface
         */
        $interface = array_shift($interfaces);

        if (is_null($interface)) {
            return [];
        }

        $method = $interface->getMethod($method);

        $docs = $method->getDocComment();

        $docsItems = Preg::annotation($docs);

        if (!$docsItems) {
            return [];
        }

        $docsArray = [];

        foreach ($docsItems as $item) {
            $line = Preg::mergeSpaces($item);

            $lineParts = explode(' ', $line);

            $key = array_shift($lineParts);

            $docsArray[$key] = $lineParts;
        }

        return $docsArray;
    }
}
