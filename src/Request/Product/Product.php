<?php

namespace Lackoxygen\TiktokShop\Request\Product;

use Lackoxygen\TiktokShop\Request\Request;

class Product extends Request implements ProductInterface
{
    /**
     * @inheritDoc
     */
    public function productListV2(array $params = [])
    {
        $this->builder->method('POST')
            ->service('product.listV2')
            ->path('/product/listV2')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function productAddV2(array $params = [])
    {
        $this->builder->method('POST')
            ->service('product.addV2')
            ->path('/product/addV2')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function productEditV2(array $params = [])
    {
        $this->builder->method('POST')
            ->service('product.editV2')
            ->path('/product/editV2')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function productDetail(array $params = [])
    {
        $this->builder->method('POST')
            ->service('product.detail')
            ->path('/product/detail')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function productDel(array $params = [])
    {
        $this->builder->method('POST')
            ->service('product.del')
            ->path('/product/del')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function skuDetail(array $params = [])
    {
        $this->builder->method('POST')
            ->service('sku.detail')
            ->path('/sku/detail')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function brandList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('brand.list')
            ->path('/brand/list')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function productGetCatePropertyV2(array $params = [])
    {
        $this->builder->method('POST')
            ->service('product.getCatePropertyV2')
            ->path('/product/getCatePropertyV2')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function productSetOnline(array $params = [])
    {
        $this->builder->method('POST')
            ->service('product.setOnline')
            ->path('/product/setOnline')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function skuList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('sku.list')
            ->path('/sku/list')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function productSetOffline(array $params = [])
    {
        $this->builder->method('POST')
            ->service('product.setOffline')
            ->path('/product/setOffline')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function productQualityList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('product.qualityList')
            ->path('/product/qualityList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function skuEditCode(array $params = [])
    {
        $this->builder->method('POST')
            ->service('sku.editCode')
            ->path('/sku/editCode')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function productQualificationConfig(array $params = [])
    {
        $this->builder->method('POST')
            ->service('product.qualificationConfig')
            ->path('/product/qualificationConfig')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function productAddCbProduct(array $params = [])
    {
        $this->builder->method('POST')
            ->service('product.addCbProduct')
            ->path('/product/addCbProduct')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function brandGetSug(array $params = [])
    {
        $this->builder->method('POST')
            ->service('brand.getSug')
            ->path('/brand/getSug')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function productEditCbProduct(array $params = [])
    {
        $this->builder->method('POST')
            ->service('product.editCbProduct')
            ->path('/product/editCbProduct')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function productGetProductUpdateRule(array $params = [])
    {
        $this->builder->method('POST')
            ->service('product.getProductUpdateRule')
            ->path('/product/getProductUpdateRule')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function promiseDeliveryList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('promise.deliveryList')
            ->path('/promise/deliveryList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function brandConvert(array $params = [])
    {
        $this->builder->method('POST')
            ->service('brand.convert')
            ->path('/brand/convert')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function powerPushSecondSortCode(array $params = [])
    {
        $this->builder->method('POST')
            ->service('power.pushSecondSortCode')
            ->path('/power/pushSecondSortCode')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function productEditCbProductV2(array $params = [])
    {
        $this->builder->method('POST')
            ->service('product.editCbProductV2')
            ->path('/product/editCbProductV2')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function productAuditList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('product.auditList')
            ->path('/product/auditList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function opptyProductGetApplyProgress(array $params = [])
    {
        $this->builder->method('POST')
            ->service('opptyProduct.getApplyProgress')
            ->path('/opptyProduct/getApplyProgress')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function opptyProductApply(array $params = [])
    {
        $this->builder->method('POST')
            ->service('opptyProduct.apply')
            ->path('/opptyProduct/apply')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function productQualityDetail(array $params = [])
    {
        $this->builder->method('POST')
            ->service('product.qualityDetail')
            ->path('/product/qualityDetail')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function productQualityTask(array $params = [])
    {
        $this->builder->method('POST')
            ->service('product.qualityTask')
            ->path('/product/qualityTask')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function productEditBuyerLimit(array $params = [])
    {
        $this->builder->method('POST')
            ->service('product.editBuyerLimit')
            ->path('/product/editBuyerLimit')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function opptyProductClue(array $params = [])
    {
        $this->builder->method('POST')
            ->service('opptyProduct.clue')
            ->path('/opptyProduct/clue')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function spuAddShopSpu(array $params = [])
    {
        $this->builder->method('POST')
            ->service('spu.addShopSpu')
            ->path('/spu/addShopSpu')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function spuGetSpuTpl(array $params = [])
    {
        $this->builder->method('POST')
            ->service('spu.getSpuTpl')
            ->path('/spu/getSpuTpl')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function spuGetSpuInfoBySpuId(array $params = [])
    {
        $this->builder->method('POST')
            ->service('spu.getSpuInfoBySpuId')
            ->path('/spu/getSpuInfoBySpuId')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function spuGetKeyPropertyByCid(array $params = [])
    {
        $this->builder->method('POST')
            ->service('spu.getKeyPropertyByCid')
            ->path('/spu/getKeyPropertyByCid')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function skuEditPrice(array $params = [])
    {
        $this->builder->method('POST')
            ->service('sku.editPrice')
            ->path('/sku/editPrice')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function productGetRecommendCategory(array $params = [])
    {
        $this->builder->method('POST')
            ->service('product.GetRecommendCategory')
            ->path('/product/GetRecommendCategory')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function productEditComponentTemplate(array $params = [])
    {
        $this->builder->method('POST')
            ->service('product.editComponentTemplate')
            ->path('/product/editComponentTemplate')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function productCreateComponentTemplateV2(array $params = [])
    {
        $this->builder->method('POST')
            ->service('product.createComponentTemplateV2')
            ->path('/product/createComponentTemplateV2')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function productGetComponentTemplate(array $params = [])
    {
        $this->builder->method('POST')
            ->service('product.getComponentTemplate')
            ->path('/product/getComponentTemplate')
            ->params($params);
    }
}
