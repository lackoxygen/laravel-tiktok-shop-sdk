<?php

namespace Lackoxygen\TiktokShop\Request\Buyin;

use Lackoxygen\TiktokShop\Request\Request;

class Buyin extends Request implements BuyinInterface
{
    /**
     * @inheritDoc
     */
    public function buyinSimplePlan(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.simplePlan')
            ->path('/buyin/simplePlan')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinShopActivityList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.ShopActivityList')
            ->path('/buyin/ShopActivityList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinShopActivityDetail(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.shopActivityDetail')
            ->path('/buyin/shopActivityDetail')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinApplyActivities(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.applyActivities')
            ->path('/buyin/applyActivities')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinActivityProductExtendList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.activityProductExtendList')
            ->path('/buyin/activityProductExtendList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinActivityProductExtendApprove(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.activityProductExtendApprove')
            ->path('/buyin/activityProductExtendApprove')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinCreateOrUpdateOrienPlan(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.createOrUpdateOrienPlan')
            ->path('/buyin/createOrUpdateOrienPlan')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinOrienPlanList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.orienPlanList')
            ->path('/buyin/orienPlanList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinOrienPlanCtrl(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.orienPlanCtrl')
            ->path('/buyin/orienPlanCtrl')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinOrienPlanAuthors(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.orienPlanAuthors')
            ->path('/buyin/orienPlanAuthors')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinOrienPlanAuthorsAdd(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.orienPlanAuthorsAdd')
            ->path('/buyin/orienPlanAuthorsAdd')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinOrienPlanAudit(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.orienPlanAudit')
            ->path('/buyin/orienPlanAudit')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinExclusivePlan(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.exclusivePlan')
            ->path('/buyin/exclusivePlan')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinExclusivePlanAuthorOperate(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.exclusivePlanAuthorOperate')
            ->path('/buyin/exclusivePlanAuthorOperate')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function allianceColonelActivityCreateOrUpdate(array $params = [])
    {
        $this->builder->method('POST')
            ->service('alliance.colonelActivityCreateOrUpdate')
            ->path('/alliance/colonelActivityCreateOrUpdate')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function allianceActivityProductCategoryList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('alliance.activityProductCategoryList')
            ->path('/alliance/activityProductCategoryList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function allianceInstituteColonelActivityList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('alliance.instituteColonelActivityList')
            ->path('/alliance/instituteColonelActivityList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function allianceInstituteColonelActivityOperate(array $params = [])
    {
        $this->builder->method('POST')
            ->service('alliance.instituteColonelActivityOperate')
            ->path('/alliance/instituteColonelActivityOperate')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function allianceColonelActivityProduct(array $params = [])
    {
        $this->builder->method('POST')
            ->service('alliance.colonelActivityProduct')
            ->path('/alliance/colonelActivityProduct')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function allianceColonelActivityProductAudit(array $params = [])
    {
        $this->builder->method('POST')
            ->service('alliance.colonelActivityProductAudit')
            ->path('/alliance/colonelActivityProductAudit')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinColonelspecialApplyList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.colonel/specialApplyList')
            ->path('/buyin/colonel/specialApplyList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function allianceColonelActivityProductExtension(array $params = [])
    {
        $this->builder->method('POST')
            ->service('alliance.colonelActivityProductExtension')
            ->path('/alliance/colonelActivityProductExtension')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinColonelspecialApplyDeal(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.colonel/specialApplyDeal')
            ->path('/buyin/colonel/specialApplyDeal')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinOriginColonelEnrollableActivityList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.originColonelEnrollableActivityList')
            ->path('/buyin/originColonelEnrollableActivityList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinColonelActivityDetail(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.colonelActivityDetail')
            ->path('/buyin/colonelActivityDetail')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinOriginColonelUnappliedProductList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.originColonelUnappliedProductList')
            ->path('/buyin/originColonelUnappliedProductList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinOriginColonelApplyActivities(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.originColonelApplyActivities')
            ->path('/buyin/originColonelApplyActivities')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinActivityProductList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.activityProductList')
            ->path('/buyin/activityProductList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinActivityProductCancel(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.activityProductCancel')
            ->path('/buyin/activityProductCancel')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function allianceMaterialsProductsSearch(array $params = [])
    {
        $this->builder->method('POST')
            ->service('alliance.materialsProductsSearch')
            ->path('/alliance/materialsProductsSearch')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinSimplePlanList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.simplePlanList')
            ->path('/buyin/simplePlanList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function allianceMaterialsProductsDetails(array $params = [])
    {
        $this->builder->method('POST')
            ->service('alliance.materialsProductsDetails')
            ->path('/alliance/materialsProductsDetails')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinProductSkus(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.productSkus')
            ->path('/buyin/productSkus')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function allianceMaterialsProductCategory(array $params = [])
    {
        $this->builder->method('POST')
            ->service('alliance.materialsProductCategory')
            ->path('/alliance/materialsProductCategory')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinMaterialsProductStatus(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.materialsProductStatus')
            ->path('/buyin/materialsProductStatus')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinKolMaterialsProductsSearch(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.kolMaterialsProductsSearch')
            ->path('/buyin/kolMaterialsProductsSearch')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinKolMaterialsProductsDetails(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.kolMaterialsProductsDetails')
            ->path('/buyin/kolMaterialsProductsDetails')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinQueryInstituteOrders(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.queryInstituteOrders')
            ->path('/buyin/queryInstituteOrders')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinInstituteOrderMCN(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.instituteOrderMCN')
            ->path('/buyin/instituteOrderMCN')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinInstituteOrderColonel(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.instituteOrderColonel')
            ->path('/buyin/instituteOrderColonel')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinInstPickSourceConvert(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.instPickSourceConvert')
            ->path('/buyin/instPickSourceConvert')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinInstGmv(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.instGmv')
            ->path('/buyin/instGmv')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinInstGmvDetail(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.instGmvDetail')
            ->path('/buyin/instGmvDetail')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinKolPidCreate(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.kolPidCreate')
            ->path('/buyin/kolPidCreate')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinKolPidList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.kolPidList')
            ->path('/buyin/kolPidList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinKolPidEdit(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.kolPidEdit')
            ->path('/buyin/kolPidEdit')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinKolPidDel(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.kolPidDel')
            ->path('/buyin/kolPidDel')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinShareCommandParse(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.shareCommandParse')
            ->path('/buyin/shareCommandParse')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinKolProductShare(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.kolProductShare')
            ->path('/buyin/kolProductShare')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinInstitutePidCreate(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.institutePidCreate')
            ->path('/buyin/institutePidCreate')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinInstitutePidList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.institutePidList')
            ->path('/buyin/institutePidList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinInstitutePidEdit(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.institutePidEdit')
            ->path('/buyin/institutePidEdit')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinInstitutePidDel(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.institutePidDel')
            ->path('/buyin/institutePidDel')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinLiveShareMaterial(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.liveShareMaterial')
            ->path('/buyin/liveShareMaterial')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinDistributionLiveProductList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.distributionLiveProductList')
            ->path('/buyin/distributionLiveProductList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinInstituteLiveShare(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.instituteLiveShare')
            ->path('/buyin/instituteLiveShare')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinInstituteOrderAds(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.instituteOrderAds')
            ->path('/buyin/instituteOrderAds')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinKolOrderAds(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.kolOrderAds')
            ->path('/buyin/kolOrderAds')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinShopPidMemberCreate(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.shopPidMemberCreate')
            ->path('/buyin/shopPidMemberCreate')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinKolLiveShare(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.kolLiveShare')
            ->path('/buyin/kolLiveShare')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinMHandleTrusteeshipApply(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.mHandleTrusteeshipApply')
            ->path('/buyin/mHandleTrusteeshipApply')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinColoneltrusteeshipList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.colonel/trusteeshipList')
            ->path('/buyin/colonel/trusteeshipList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinInstituteOrderPick(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.instituteOrderPick')
            ->path('/buyin/instituteOrderPick')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinInstituteLivePreviewShare(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.instituteLivePreviewShare')
            ->path('/buyin/instituteLivePreviewShare')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinKolLivePreviewShare(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.kolLivePreviewShare')
            ->path('/buyin/kolLivePreviewShare')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function buyinActivityShareConvert(array $params = [])
    {
        $this->builder->method('POST')
            ->service('buyin.activityShareConvert')
            ->path('/buyin/activityShareConvert')
            ->params($params);
    }
}
