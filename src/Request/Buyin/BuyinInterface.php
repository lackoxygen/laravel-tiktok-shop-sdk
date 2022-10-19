<?php

namespace Lackoxygen\TiktokShop\Request\Buyin;

use Lackoxygen\TiktokShop\Response\ResultSet;

/**
 * @note 精选联盟API
 */
interface BuyinInterface
{
    /**
     * 创建/修改普通商品推广计划
     * @link https://op.jinritemai.com/docs/api-docs/61/923
     * @param array $params
     * @return ResultSet
     */
    public function buyinSimplePlan(array $params = []);

    /**
     * 商家可参与的团长活动查询接口
     * @link https://op.jinritemai.com/docs/api-docs/61/1671
     * @param array $params
     * @return ResultSet
     */
    public function buyinShopActivityList(array $params = []);

    /**
     * 商家侧获取团长活动详情
     * @link https://op.jinritemai.com/docs/api-docs/61/1797
     * @param array $params
     * @return ResultSet
     */
    public function buyinShopActivityDetail(array $params = []);

    /**
     * 商品团长活动提报接口
     * @link https://op.jinritemai.com/docs/api-docs/61/744
     * @param array $params
     * @return ResultSet
     */
    public function buyinApplyActivities(array $params = []);

    /**
     * 延长推广待处理/已处理记录查询
     * @link https://op.jinritemai.com/docs/api-docs/61/1674
     * @param array $params
     * @return ResultSet
     */
    public function buyinActivityProductExtendList(array $params = []);

    /**
     * 商家处理团长活动商品的推广延期申请
     * @link https://op.jinritemai.com/docs/api-docs/61/1673
     * @param array $params
     * @return ResultSet
     */
    public function buyinActivityProductExtendApprove(array $params = []);

    /**
     * 创建/修改商品定向计划
     * @link https://op.jinritemai.com/docs/api-docs/61/708
     * @param array $params
     * @return ResultSet
     */
    public function buyinCreateOrUpdateOrienPlan(array $params = []);

    /**
     * 商品定向计划查询
     * @link https://op.jinritemai.com/docs/api-docs/61/705
     * @param array $params
     * @return ResultSet
     */
    public function buyinOrienPlanList(array $params = []);

    /**
     * 商品定向计划管理
     * @link https://op.jinritemai.com/docs/api-docs/61/704
     * @param array $params
     * @return ResultSet
     */
    public function buyinOrienPlanCtrl(array $params = []);

    /**
     * 查询定向计划作者列表
     * @link https://op.jinritemai.com/docs/api-docs/61/1879
     * @param array $params
     * @return ResultSet
     */
    public function buyinOrienPlanAuthors(array $params = []);

    /**
     * 向指定定向计划中添加达人
     * @link https://op.jinritemai.com/docs/api-docs/61/1877
     * @param array $params
     * @return ResultSet
     */
    public function buyinOrienPlanAuthorsAdd(array $params = []);

    /**
     * 定向计划达人申请审核
     * @link https://op.jinritemai.com/docs/api-docs/61/1878
     * @param array $params
     * @return ResultSet
     */
    public function buyinOrienPlanAudit(array $params = []);

    /**
     * 创建/修改商品专属推广计划
     * @link https://op.jinritemai.com/docs/api-docs/61/1880
     * @param array $params
     * @return ResultSet
     */
    public function buyinExclusivePlan(array $params = []);

    /**
     * 店铺专属达人管理
     * @link https://op.jinritemai.com/docs/api-docs/61/1935
     * @param array $params
     * @return ResultSet
     */
    public function buyinExclusivePlanAuthorOperate(array $params = []);

    /**
     * 团长活动创建/编辑接口
     * @link https://op.jinritemai.com/docs/api-docs/61/966
     * @param array $params
     * @return ResultSet
     */
    public function allianceColonelActivityCreateOrUpdate(array $params = []);

    /**
     * 创建活动时候可选择的类目接口
     * @link https://op.jinritemai.com/docs/api-docs/61/1882
     * @param array $params
     * @return ResultSet
     */
    public function allianceActivityProductCategoryList(array $params = []);

    /**
     * 团长活动查询接口
     * @link https://op.jinritemai.com/docs/api-docs/61/1330
     * @param array $params
     * @return ResultSet
     */
    public function allianceInstituteColonelActivityList(array $params = []);

    /**
     * 专属团长活动删除接口（下线+删除）
     * @link https://op.jinritemai.com/docs/api-docs/61/972
     * @param array $params
     * @return ResultSet
     */
    public function allianceInstituteColonelActivityOperate(array $params = []);

    /**
     * 活动商品查询接口
     * @link https://op.jinritemai.com/docs/api-docs/61/968
     * @param array $params
     * @return ResultSet
     */
    public function allianceColonelActivityProduct(array $params = []);

    /**
     * 专属团长活动商品审核接口
     * @link https://op.jinritemai.com/docs/api-docs/61/971
     * @param array $params
     * @return ResultSet
     */
    public function allianceColonelActivityProductAudit(array $params = []);

    /**
     * 查询团长活动特殊申请
     * @link https://op.jinritemai.com/docs/api-docs/61/1552
     * @param array $params
     * @return ResultSet
     */
    public function buyinColonelspecialApplyList(array $params = []);

    /**
     * 专属团长活动商品延时接口
     * @link https://op.jinritemai.com/docs/api-docs/61/1881
     * @param array $params
     * @return ResultSet
     */
    public function allianceColonelActivityProductExtension(array $params = []);

    /**
     * 团长活动特殊申请审核
     * @link https://op.jinritemai.com/docs/api-docs/61/1553
     * @param array $params
     * @return ResultSet
     */
    public function buyinColonelspecialApplyDeal(array $params = []);

    /**
     * 团长可参与的二级团长活动查询接口
     * @link https://op.jinritemai.com/docs/api-docs/61/1675
     * @param array $params
     * @return ResultSet
     */
    public function buyinOriginColonelEnrollableActivityList(array $params = []);

    /**
     * 获取团长活动详情
     * @link https://op.jinritemai.com/docs/api-docs/61/1670
     * @param array $params
     * @return ResultSet
     */
    public function buyinColonelActivityDetail(array $params = []);

    /**
     * 团长获取可提报二级团长活动的商品列表
     * @link https://op.jinritemai.com/docs/api-docs/61/1677
     * @param array $params
     * @return ResultSet
     */
    public function buyinOriginColonelUnappliedProductList(array $params = []);

    /**
     * 团长报名二级团长活动
     * @link https://op.jinritemai.com/docs/api-docs/61/1672
     * @param array $params
     * @return ResultSet
     */
    public function buyinOriginColonelApplyActivities(array $params = []);

    /**
     * 一级团长查询提报活动商品
     * @link https://op.jinritemai.com/docs/api-docs/61/1926
     * @param array $params
     * @return ResultSet
     */
    public function buyinActivityProductList(array $params = []);

    /**
     * 一级团长取消活动提报申请接口
     * @link https://op.jinritemai.com/docs/api-docs/61/1927
     * @param array $params
     * @return ResultSet
     */
    public function buyinActivityProductCancel(array $params = []);

    /**
     * 检索精选联盟商品
     * @link https://op.jinritemai.com/docs/api-docs/61/924
     * @param array $params
     * @return ResultSet
     */
    public function allianceMaterialsProductsSearch(array $params = []);

    /**
     * 商品推广 普通计划查询
     * @link https://op.jinritemai.com/docs/api-docs/61/349
     * @param array $params
     * @return ResultSet
     */
    public function buyinSimplePlanList(array $params = []);

    /**
     * 批量查询推广商品详情
     * @link https://op.jinritemai.com/docs/api-docs/61/1356
     * @param array $params
     * @return ResultSet
     */
    public function allianceMaterialsProductsDetails(array $params = []);

    /**
     * 查询商品 SKU
     * @link https://op.jinritemai.com/docs/api-docs/61/1626
     * @param array $params
     * @return ResultSet
     */
    public function buyinProductSkus(array $params = []);

    /**
     * 类目查询
     * @link https://op.jinritemai.com/docs/api-docs/61/637
     * @param array $params
     * @return ResultSet
     */
    public function allianceMaterialsProductCategory(array $params = []);

    /**
     * 商品状态查询
     * @link https://op.jinritemai.com/docs/api-docs/61/1497
     * @param array $params
     * @return ResultSet
     */
    public function buyinMaterialsProductStatus(array $params = []);

    /**
     * 检索精选联盟商品，需达人授权
     * @link https://op.jinritemai.com/docs/api-docs/61/1725
     * @param array $params
     * @return ResultSet
     */
    public function buyinKolMaterialsProductsSearch(array $params = []);

    /**
     * 查询达人视角商品详情
     * @link https://op.jinritemai.com/docs/api-docs/61/1589
     * @param array $params
     * @return ResultSet
     */
    public function buyinKolMaterialsProductsDetails(array $params = []);

    /**
     * 【即将下线】查询机构联盟订单
     * @link https://op.jinritemai.com/docs/api-docs/61/1398
     * @param array $params
     * @return ResultSet
     */
    public function buyinQueryInstituteOrders(array $params = []);

    /**
     * 查询MCN机构订单
     * @link https://op.jinritemai.com/docs/api-docs/61/1602
     * @param array $params
     * @return ResultSet
     */
    public function buyinInstituteOrderMCN(array $params = []);

    /**
     * 机构查询团长订单
     * @link https://op.jinritemai.com/docs/api-docs/61/1603
     * @param array $params
     * @return ResultSet
     */
    public function buyinInstituteOrderColonel(array $params = []);

    /**
     * 商品选品来源转链
     * @link https://op.jinritemai.com/docs/api-docs/61/1454
     * @param array $params
     * @return ResultSet
     */
    public function buyinInstPickSourceConvert(array $params = []);

    /**
     * 机构选品GMV查询接口
     * @link https://op.jinritemai.com/docs/api-docs/61/1652
     * @param array $params
     * @return ResultSet
     */
    public function buyinInstGmv(array $params = []);

    /**
     * 机构选品GMV明细查询接口
     * @link https://op.jinritemai.com/docs/api-docs/61/1653
     * @param array $params
     * @return ResultSet
     */
    public function buyinInstGmvDetail(array $params = []);

    /**
     * 达人PID创建
     * @link https://op.jinritemai.com/docs/api-docs/61/1460
     * @param array $params
     * @return ResultSet
     */
    public function buyinKolPidCreate(array $params = []);

    /**
     * 达人PID查询接口
     * @link https://op.jinritemai.com/docs/api-docs/61/1461
     * @param array $params
     * @return ResultSet
     */
    public function buyinKolPidList(array $params = []);

    /**
     * 达人PID 编辑
     * @link https://op.jinritemai.com/docs/api-docs/61/1462
     * @param array $params
     * @return ResultSet
     */
    public function buyinKolPidEdit(array $params = []);

    /**
     * 达人PID删除
     * @link https://op.jinritemai.com/docs/api-docs/61/1463
     * @param array $params
     * @return ResultSet
     */
    public function buyinKolPidDel(array $params = []);

    /**
     * 商品口令转商品解析
     * @link https://op.jinritemai.com/docs/api-docs/61/1726
     * @param array $params
     * @return ResultSet
     */
    public function buyinShareCommandParse(array $params = []);

    /**
     * 达人商品分销转链
     * @link https://op.jinritemai.com/docs/api-docs/61/1464
     * @param array $params
     * @return ResultSet
     */
    public function buyinKolProductShare(array $params = []);

    /**
     * 机构PID创建
     * @link https://op.jinritemai.com/docs/api-docs/61/1273
     * @param array $params
     * @return ResultSet
     */
    public function buyinInstitutePidCreate(array $params = []);

    /**
     * 机构PID查询接口
     * @link https://op.jinritemai.com/docs/api-docs/61/1269
     * @param array $params
     * @return ResultSet
     */
    public function buyinInstitutePidList(array $params = []);

    /**
     * 机构PID 编辑
     * @link https://op.jinritemai.com/docs/api-docs/61/1270
     * @param array $params
     * @return ResultSet
     */
    public function buyinInstitutePidEdit(array $params = []);

    /**
     * 机构PID删除
     * @link https://op.jinritemai.com/docs/api-docs/61/1271
     * @param array $params
     * @return ResultSet
     */
    public function buyinInstitutePidDel(array $params = []);

    /**
     * 直播间分销物料查询
     * @link https://op.jinritemai.com/docs/api-docs/61/1396
     * @param array $params
     * @return ResultSet
     */
    public function buyinLiveShareMaterial(array $params = []);

    /**
     * 分销直播间商品列表
     * @link https://op.jinritemai.com/docs/api-docs/61/1770
     * @param array $params
     * @return ResultSet
     */
    public function buyinDistributionLiveProductList(array $params = []);

    /**
     * 机构获取达人直播间分享链接
     * @link https://op.jinritemai.com/docs/api-docs/61/1297
     * @param array $params
     * @return ResultSet
     */
    public function buyinInstituteLiveShare(array $params = []);

    /**
     * 查询抖客直播间分销订单
     * @link https://op.jinritemai.com/docs/api-docs/61/1296
     * @param array $params
     * @return ResultSet
     */
    public function buyinInstituteOrderAds(array $params = []);

    /**
     * 查询达人的直播间分销、商品分销、活动页分销订单
     * @link https://op.jinritemai.com/docs/api-docs/61/1459
     * @param array $params
     * @return ResultSet
     */
    public function buyinKolOrderAds(array $params = []);

    /**
     * 店铺会员绑定渠道关系创建
     * @link https://op.jinritemai.com/docs/api-docs/61/1493
     * @param array $params
     * @return ResultSet
     */
    public function buyinShopPidMemberCreate(array $params = []);

    /**
     * 获取达人直播间分享链接
     * @link https://op.jinritemai.com/docs/api-docs/61/1724
     * @param array $params
     * @return ResultSet
     */
    public function buyinKolLiveShare(array $params = []);

    /**
     * 团长托管商品审核
     * @link https://op.jinritemai.com/docs/api-docs/61/2138
     * @param array $params
     * @return ResultSet
     */
    public function buyinMHandleTrusteeshipApply(array $params = []);

    /**
     * 团长托管商品查询
     * @link https://op.jinritemai.com/docs/api-docs/61/2137
     * @param array $params
     * @return ResultSet
     */
    public function buyinColoneltrusteeshipList(array $params = []);

    /**
     * 选品订单明细查询接口
     * @link https://op.jinritemai.com/docs/api-docs/61/2008
     * @param array $params
     * @return ResultSet
     */
    public function buyinInstituteOrderPick(array $params = []);

    /**
     * 机构直播预告转链
     * @link https://op.jinritemai.com/docs/api-docs/61/2007
     * @param array $params
     * @return ResultSet
     */
    public function buyinInstituteLivePreviewShare(array $params = []);

    /**
     * 达人直播预告转链
     * @link https://op.jinritemai.com/docs/api-docs/61/2006
     * @param array $params
     * @return ResultSet
     */
    public function buyinKolLivePreviewShare(array $params = []);

    /**
     * 活动页转链接口
     * @link https://op.jinritemai.com/docs/api-docs/61/2003
     * @param array $params
     * @return ResultSet
     */
    public function buyinActivityShareConvert(array $params = []);
}
