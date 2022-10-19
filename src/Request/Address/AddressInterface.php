<?php

namespace Lackoxygen\TiktokShop\Request\Address;

use Lackoxygen\TiktokShop\Response\ResultSet;

/**
 * @note 店铺API
 */
interface AddressInterface
{
    /**
     * 商家入驻提交资料
     * @link https://op.jinritemai.com/docs/api-docs/13/658
     * @param array $params
     * @return ResultSet
     */
    public function qualificationSettle(array $params = []);

    /**
     * 店铺修改售后地址接口
     * @link https://op.jinritemai.com/docs/api-docs/13/1511
     * @param array $params
     * @return ResultSet
     */
    public function addressUpdate(array $params = []);

    /**
     * 创建店铺地址库
     * @link https://op.jinritemai.com/docs/api-docs/13/1510
     * @param array $params
     * @return ResultSet
     */
    public function addressCreate(array $params = []);

    /**
     * 获取商家推广链接接口
     * @link https://op.jinritemai.com/docs/api-docs/13/1455
     * @param array $params
     * @return ResultSet
     */
    public function memberGetShopShortLink(array $params = []);

    /**
     * 售后地址列表接口
     * @link https://op.jinritemai.com/docs/api-docs/13/1435
     * @param array $params
     * @return ResultSet
     */
    public function addressList(array $params = []);

    /**
     * 获取店铺后台供商家发布商品的类目
     * @link https://op.jinritemai.com/docs/api-docs/13/1820
     * @param array $params
     * @return ResultSet
     */
    public function shopGetShopCategory(array $params = []);

    /**
     * 获取店铺的已授权品牌列表
     * @link https://op.jinritemai.com/docs/api-docs/13/1821
     * @param array $params
     * @return ResultSet
     */
    public function shopBrandList(array $params = []);
}
