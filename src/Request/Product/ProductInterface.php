<?php

namespace Lackoxygen\TiktokShop\Request\Product;

use Lackoxygen\TiktokShop\Response\ResultSet;

/**
 * @note 商品API
 */
interface ProductInterface
{
    /**
     * 获取商品列表新版
     * @link https://op.jinritemai.com/docs/api-docs/14/633
     * @param array $params
     * @return ResultSet
     */
    public function productListV2(array $params = []);

    /**
     * 发布商品
     * @link https://op.jinritemai.com/docs/api-docs/14/249
     * @param array $params
     * @return ResultSet
     */
    public function productAddV2(array $params = []);

    /**
     * 编辑商品
     * @link https://op.jinritemai.com/docs/api-docs/14/250
     * @param array $params
     * @return ResultSet
     */
    public function productEditV2(array $params = []);

    /**
     * 商品查询
     * @link https://op.jinritemai.com/docs/api-docs/14/56
     * @param array $params
     * @return ResultSet
     */
    public function productDetail(array $params = []);

    /**
     * 删除商品
     * @link https://op.jinritemai.com/docs/api-docs/14/61
     * @param array $params
     * @return ResultSet
     */
    public function productDel(array $params = []);

    /**
     * 获取商品sku详情
     * @link https://op.jinritemai.com/docs/api-docs/14/566
     * @param array $params
     * @return ResultSet
     */
    public function skuDetail(array $params = []);

    /**
     * 根据类目id获取可选品牌
     * @link https://op.jinritemai.com/docs/api-docs/14/1267
     * @param array $params
     * @return ResultSet
     */
    public function brandList(array $params = []);

    /**
     * 根据商品分类获取对应的属性列表
     * @link https://op.jinritemai.com/docs/api-docs/14/1373
     * @param array $params
     * @return ResultSet
     */
    public function productGetCatePropertyV2(array $params = []);

    /**
     * 商品上架
     * @link https://op.jinritemai.com/docs/api-docs/14/251
     * @param array $params
     * @return ResultSet
     */
    public function productSetOnline(array $params = []);

    /**
     * 获取商品sku列表
     * @link https://op.jinritemai.com/docs/api-docs/14/82
     * @param array $params
     * @return ResultSet
     */
    public function skuList(array $params = []);

    /**
     * 商品下架
     * @link https://op.jinritemai.com/docs/api-docs/14/252
     * @param array $params
     * @return ResultSet
     */
    public function productSetOffline(array $params = []);

    /**
     * 店铺商品质量查询API
     * @link https://op.jinritemai.com/docs/api-docs/14/938
     * @param array $params
     * @return ResultSet
     */
    public function productQualityList(array $params = []);

    /**
     * 修改sku编码
     * @link https://op.jinritemai.com/docs/api-docs/14/86
     * @param array $params
     * @return ResultSet
     */
    public function skuEditCode(array $params = []);

    /**
     * 获取类目下需要填写的资质列表
     * @link https://op.jinritemai.com/docs/api-docs/14/1382
     * @param array $params
     * @return ResultSet
     */
    public function productQualificationConfig(array $params = []);

    /**
     * 新增跨境/海南商品
     * @link https://op.jinritemai.com/docs/api-docs/14/499
     * @param array $params
     * @return ResultSet
     */
    public function productAddCbProduct(array $params = []);

    /**
     * 通过前缀匹配召回品牌信息
     * @link https://op.jinritemai.com/docs/api-docs/14/1436
     * @param array $params
     * @return ResultSet
     */
    public function brandGetSug(array $params = []);

    /**
     * 编辑一个跨境/海南商品
     * @link https://op.jinritemai.com/docs/api-docs/14/553
     * @param array $params
     * @return ResultSet
     */
    public function productEditCbProduct(array $params = []);

    /**
     * 查询商品发布规则
     * @link https://op.jinritemai.com/docs/api-docs/14/1614
     * @param array $params
     * @return ResultSet
     */
    public function productGetProductUpdateRule(array $params = []);

    /**
     * 商家发货时效配置推荐
     * @link https://op.jinritemai.com/docs/api-docs/14/1529
     * @param array $params
     * @return ResultSet
     */
    public function promiseDeliveryList(array $params = []);

    /**
     * 兼容老品牌id转为新品牌id
     * @link https://op.jinritemai.com/docs/api-docs/14/1500
     * @param array $params
     * @return ResultSet
     */
    public function brandConvert(array $params = []);

    /**
     * 二段码推送（仅用于兼容老物流网关）
     * @link https://op.jinritemai.com/docs/api-docs/14/1484
     * @param array $params
     * @return ResultSet
     */
    public function powerPushSecondSortCode(array $params = []);

    /**
     * 编辑一个跨境/海南商品
     * @link https://op.jinritemai.com/docs/api-docs/14/1684
     * @param array $params
     * @return ResultSet
     */
    public function productEditCbProductV2(array $params = []);

    /**
     * 审核记录列表
     * @link https://op.jinritemai.com/docs/api-docs/14/1748
     * @param array $params
     * @return ResultSet
     */
    public function productAuditList(array $params = []);

    /**
     * 机会品提报进度查询
     * @link https://op.jinritemai.com/docs/api-docs/14/1796
     * @param array $params
     * @return ResultSet
     */
    public function opptyProductGetApplyProgress(array $params = []);

    /**
     * 机会品提报
     * @link https://op.jinritemai.com/docs/api-docs/14/1798
     * @param array $params
     * @return ResultSet
     */
    public function opptyProductApply(array $params = []);

    /**
     * 商品信息质量分查询API
     * @link https://op.jinritemai.com/docs/api-docs/14/1830
     * @param array $params
     * @return ResultSet
     */
    public function productQualityDetail(array $params = []);

    /**
     * 商品每日诊断任务查询API
     * @link https://op.jinritemai.com/docs/api-docs/14/1829
     * @param array $params
     * @return ResultSet
     */
    public function productQualityTask(array $params = []);

    /**
     * 设置商品限购
     * @link https://op.jinritemai.com/docs/api-docs/14/1823
     * @param array $params
     * @return ResultSet
     */
    public function productEditBuyerLimit(array $params = []);

    /**
     * 机会品线索触达
     * @link https://op.jinritemai.com/docs/api-docs/14/1828
     * @param array $params
     * @return ResultSet
     */
    public function opptyProductClue(array $params = []);

    /**
     * 店铺新增SPU
     * @link https://op.jinritemai.com/docs/api-docs/14/1827
     * @param array $params
     * @return ResultSet
     */
    public function spuAddShopSpu(array $params = []);

    /**
     * 获取spu模板
     * @link https://op.jinritemai.com/docs/api-docs/14/1826
     * @param array $params
     * @return ResultSet
     */
    public function spuGetSpuTpl(array $params = []);

    /**
     * SPU信息查看
     * @link https://op.jinritemai.com/docs/api-docs/14/1825
     * @param array $params
     * @return ResultSet
     */
    public function spuGetSpuInfoBySpuId(array $params = []);

    /**
     * 关键属性查询接口
     * @link https://op.jinritemai.com/docs/api-docs/14/1824
     * @param array $params
     * @return ResultSet
     */
    public function spuGetKeyPropertyByCid(array $params = []);

    /**
     * 编辑sku价格
     * @link https://op.jinritemai.com/docs/api-docs/14/1822
     * @param array $params
     * @return ResultSet
     */
    public function skuEditPrice(array $params = []);

    /**
     * 商品类目预测
     * @link https://op.jinritemai.com/docs/api-docs/14/2004
     * @param array $params
     * @return ResultSet
     */
    public function productGetRecommendCategory(array $params = []);

    /**
     * 编辑尺码模板
     * @link https://op.jinritemai.com/docs/api-docs/14/1993
     * @param array $params
     * @return ResultSet
     */
    public function productEditComponentTemplate(array $params = []);

    /**
     * 创建尺码模板
     * @link https://op.jinritemai.com/docs/api-docs/14/1992
     * @param array $params
     * @return ResultSet
     */
    public function productCreateComponentTemplateV2(array $params = []);

    /**
     * 分页查询模板列表
     * @link https://op.jinritemai.com/docs/api-docs/14/1990
     * @param array $params
     * @return ResultSet
     */
    public function productGetComponentTemplate(array $params = []);
}
