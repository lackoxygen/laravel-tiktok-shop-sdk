<?php

namespace Lackoxygen\TiktokShop\Request\Logistics;

use Lackoxygen\TiktokShop\Response\ResultSet;

/**
 * @note 物流发货API
 */
interface LogisticsInterface
{
    /**
     * 追加子母件
     * @link https://op.jinritemai.com/docs/api-docs/16/1075
     * @param array $params
     * @return ResultSet
     */
    public function logisticsAppendSubOrder(array $params = []);

    /**
     * 获取快递公司列表
     * @link https://op.jinritemai.com/docs/api-docs/16/541
     * @param array $params
     * @return ResultSet
     */
    public function orderLogisticsCompanyList(array $params = []);

    /**
     * 订单发货接口
     * @link https://op.jinritemai.com/docs/api-docs/16/718
     * @param array $params
     * @return ResultSet
     */
    public function orderLogisticsAdd(array $params = []);

    /**
     * 修改发货物流
     * @link https://op.jinritemai.com/docs/api-docs/16/390
     * @param array $params
     * @return ResultSet
     */
    public function orderLogisticsEdit(array $params = []);

    /**
     * 修改包裹里的物流信息
     * @link https://op.jinritemai.com/docs/api-docs/16/539
     * @param array $params
     * @return ResultSet
     */
    public function orderLogisticsEditByPack(array $params = []);

    /**
     * 一单多包发货接口
     * @link https://op.jinritemai.com/docs/api-docs/16/562
     * @param array $params
     * @return ResultSet
     */
    public function orderLogisticsAddMultiPack(array $params = []);

    /**
     * 获取运费模板列表
     * @link https://op.jinritemai.com/docs/api-docs/16/565
     * @param array $params
     * @return ResultSet
     */
    public function freightTemplateList(array $params = []);

    /**
     * 支持多个订单发同一个物流包裹
     * @link https://op.jinritemai.com/docs/api-docs/16/563
     * @param array $params
     * @return ResultSet
     */
    public function orderLogisticsAddSinglePack(array $params = []);

    /**
     * 更新收件人信息 以及发件人名字联系方式信息，不支持顺丰速递面单信息更新
     * @link https://op.jinritemai.com/docs/api-docs/16/494
     * @param array $params
     * @return ResultSet
     */
    public function logisticsUpdateOrder(array $params = []);

    /**
     * 用于ISV/商家ERP系统 端发起取消已获取的电子面单号
     * @link https://op.jinritemai.com/docs/api-docs/16/397
     * @param array $params
     * @return ResultSet
     */
    public function logisticsCancelOrder(array $params = []);

    /**
     * 服务商回传仓储
     * @link https://op.jinritemai.com/docs/api-docs/16/526
     * @param array $params
     * @return ResultSet
     */
    public function crossBorderOrderOperate(array $params = []);

    /**
     * 服务商回告清关状态
     * @link https://op.jinritemai.com/docs/api-docs/16/527
     * @param array $params
     * @return ResultSet
     */
    public function crossborderOrderCustomClearance(array $params = []);

    /**
     * 服务商回传国际干线作业节点
     * @link https://op.jinritemai.com/docs/api-docs/16/528
     * @param array $params
     * @return ResultSet
     */
    public function crossborderOrderLogisticsTrace(array $params = []);

    /**
     * 查询商家自定义区域数据
     * @link https://op.jinritemai.com/docs/api-docs/16/549
     * @param array $params
     * @return ResultSet
     */
    public function logisticsCustomTemplateList(array $params = []);

    /**
     * 查询地址快递是否可以送达
     * @link https://op.jinritemai.com/docs/api-docs/16/582
     * @param array $params
     * @return ResultSet
     */
    public function logisticsGetOutRange(array $params = []);

    /**
     * 服务商接单
     * @link https://op.jinritemai.com/docs/api-docs/16/401
     * @param array $params
     * @return ResultSet
     */
    public function crossBorderOrderConfirm(array $params = []);

    /**
     * 获取商家所有模版信息
     * @link https://op.jinritemai.com/docs/api-docs/16/476
     * @param array $params
     * @return ResultSet
     */
    public function logisticsTemplateList(array $params = []);

    /**
     * 获取面单信息
     * @link https://op.jinritemai.com/docs/api-docs/16/490
     * @param array $params
     * @return ResultSet
     */
    public function logisticsWaybillApply(array $params = []);

    /**
     * 订单放行/回退
     * @link https://op.jinritemai.com/docs/api-docs/16/1578
     * @param array $params
     * @return ResultSet
     */
    public function logisticsDeliveryNotice(array $params = []);

    /**
     * 末端服务字节面单信息查询（仅用于兼容老物流网关）
     * @link https://op.jinritemai.com/docs/api-docs/16/1558
     * @param array $params
     * @return ResultSet
     */
    public function powerIsByteDancePackage(array $params = []);

    /**
     * 一段码推送（包含末端中心、集包地、大头笔）（仅用于兼容老物流网关）
     * @link https://op.jinritemai.com/docs/api-docs/16/1488
     * @param array $params
     * @return ResultSet
     */
    public function powerPushFirstSortCode(array $params = []);

    /**
     * 个性化集包编码推送（仅用于兼容老物流网关）
     * @link https://op.jinritemai.com/docs/api-docs/16/1486
     * @param array $params
     * @return ResultSet
     */
    public function powerPushCustomSortCode(array $params = []);

    /**
     * 三段码推送（仅用于兼容老物流网关）
     * @link https://op.jinritemai.com/docs/api-docs/16/1485
     * @param array $params
     * @return ResultSet
     */
    public function powerPushThirdSortCode(array $params = []);

    /**
     * 商家ERP/ISV 向字节电子面单系统获取单号和打印信息
     * @link https://op.jinritemai.com/docs/api-docs/16/1339
     * @param array $params
     * @return ResultSet
     */
    public function logisticsNewCreateOrder(array $params = []);

    /**
     * isv轨迹查询
     * @link https://op.jinritemai.com/docs/api-docs/16/1632
     * @param array $params
     * @return ResultSet
     */
    public function logisticsQueryPackageRoute(array $params = []);

    /**
     * isv轨迹订阅
     * @link https://op.jinritemai.com/docs/api-docs/16/1631
     * @param array $params
     * @return ResultSet
     */
    public function logisticsRegisterPackageRoute(array $params = []);

    /**
     * 物流商推送改约时间
     * @link https://op.jinritemai.com/docs/api-docs/16/1627
     * @param array $params
     * @return ResultSet
     */
    public function powerUpdateCollectTime(array $params = []);

    /**
     * 更新运费模板
     * @link https://op.jinritemai.com/docs/api-docs/16/1662
     * @param array $params
     * @return ResultSet
     */
    public function freightTemplateUpdate(array $params = []);

    /**
     * 创建运费模板
     * @link https://op.jinritemai.com/docs/api-docs/16/1661
     * @param array $params
     * @return ResultSet
     */
    public function freightTemplateCreate(array $params = []);

    /**
     * 末端服务商回传取件码（仅用于兼容老物流网关）
     * @link https://op.jinritemai.com/docs/api-docs/16/1793
     * @param array $params
     * @return ResultSet
     */
    public function powerPickupCodeCallback(array $params = []);

    /**
     * 查询商家自定义模板（新版）
     * @link https://op.jinritemai.com/docs/api-docs/16/1737
     * @param array $params
     * @return ResultSet
     */
    public function logisticsGetDesignTemplateList(array $params = []);

    /**
     * 虚拟号服务商通话记录回传（仅用于兼容老物流网关）
     * @link https://op.jinritemai.com/docs/api-docs/16/1920
     * @param array $params
     * @return ResultSet
     */
    public function powerVirtualServicePushCallRecord(array $params = []);

    /**
     * 查询商家自定义区模板（新版）
     * @link https://op.jinritemai.com/docs/api-docs/16/1852
     * @param array $params
     * @return ResultSet
     */
    public function logisticsGetCustomTemplateList(array $params = []);

    /**
     * 运单轨迹查询接口
     * @link https://op.jinritemai.com/docs/api-docs/16/1851
     * @param array $params
     * @return ResultSet
     */
    public function logisticsTrackNoRouteDetail(array $params = []);

    /**
     * 海南项目服务商回传实操节点
     * @link https://op.jinritemai.com/docs/api-docs/16/1850
     * @param array $params
     * @return ResultSet
     */
    public function dutyFreeOrderOperate(array $params = []);

    /**
     * 查询跨境订单列表
     * @link https://op.jinritemai.com/docs/api-docs/16/1849
     * @param array $params
     * @return ResultSet
     */
    public function crossBorderOrderList(array $params = []);

    /**
     * 查询商家和物流商的订购关系以及物流单号使用情况
     * @link https://op.jinritemai.com/docs/api-docs/16/1843
     * @param array $params
     * @return ResultSet
     */
    public function logisticsListShopNetsite(array $params = []);

    /**
     * 获取四级地址全量省份信息
     * @link https://op.jinritemai.com/docs/api-docs/16/1848
     * @param array $params
     * @return ResultSet
     */
    public function addressGetProvince(array $params = []);

    /**
     * 根据省获取全量四级地址
     * @link https://op.jinritemai.com/docs/api-docs/16/1844
     * @param array $params
     * @return ResultSet
     */
    public function addressGetAreasByProvince(array $params = []);

    /**
     * 获取运费模板详情
     * @link https://op.jinritemai.com/docs/api-docs/16/2157
     * @param array $params
     * @return ResultSet
     */
    public function freightTemplateDetail(array $params = []);

    /**
     * 快递服务商将运单申报的回执回告至平台
     * @link https://op.jinritemai.com/docs/api-docs/16/2020
     * @param array $params
     * @return ResultSet
     */
    public function crossBorderReceiveReceiptOfCustomsWayBill(array $params = []);

    /**
     * 末端订单状态推送
     * @link https://op.jinritemai.com/docs/api-docs/16/2016
     * @param array $params
     * @return ResultSet
     */
    public function logisticsUpdateTerminalOrder(array $params = []);

    /**
     * 虚拟号服务商回传虚拟号接通事件
     * @link https://op.jinritemai.com/docs/api-docs/16/2011
     * @param array $params
     * @return ResultSet
     */
    public function powerHandleVirtualTelConnect(array $params = []);
}
