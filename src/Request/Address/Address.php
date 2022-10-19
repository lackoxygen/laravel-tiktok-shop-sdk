<?php

namespace Lackoxygen\TiktokShop\Request\Address;

use Lackoxygen\TiktokShop\Request\Request;

class Address extends Request implements AddressInterface
{
    /**
     * @inheritDoc
     */
    public function qualificationSettle(array $params = [])
    {
        $this->builder->method('POST')
            ->service('qualification.settle')
            ->path('/qualification/settle')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function addressUpdate(array $params = [])
    {
        $this->builder->method('POST')
            ->service('address.update')
            ->path('/address/update')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function addressCreate(array $params = [])
    {
        $this->builder->method('POST')
            ->service('address.create')
            ->path('/address/create')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function memberGetShopShortLink(array $params = [])
    {
        $this->builder->method('POST')
            ->service('member.getShopShortLink')
            ->path('/member/getShopShortLink')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function addressList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('address.list')
            ->path('/address/list')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function shopGetShopCategory(array $params = [])
    {
        $this->builder->method('POST')
            ->service('shop.getShopCategory')
            ->path('/shop/getShopCategory')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function shopBrandList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('shop.brandList')
            ->path('/shop/brandList')
            ->params($params);
    }
}
