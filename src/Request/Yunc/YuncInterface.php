<?php

namespace Lackoxygen\TiktokShop\Request\Yunc;

use Lackoxygen\TiktokShop\Response\ResultSet;

/**
 * @note 仓库作业API
 */
interface YuncInterface
{
    /**
     * 商家入驻仓关系查询
     * @link https://op.jinritemai.com/docs/api-docs/50/925
     * @param array $params
     * @return ResultSet
     */
    public function yuncShopWarehouseRefQuery(array $params = []);

    /**
     * WMS出库明细回传
     * @link https://op.jinritemai.com/docs/api-docs/50/941
     * @param array $params
     * @return ResultSet
     */
    public function wmsOutboundDetailNotify(array $params = []);

    /**
     * 货品推送接口-ERP(单个)
     * @link https://op.jinritemai.com/docs/api-docs/50/932
     * @param array $params
     * @return ResultSet
     */
    public function yuncErpCargoSinglePush(array $params = []);

    /**
     * wms入库单回告
     * @link https://op.jinritemai.com/docs/api-docs/50/929
     * @param array $params
     * @return ResultSet
     */
    public function yuncWmsInboundCallback(array $params = []);

    /**
     * toB出库单
     * @link https://op.jinritemai.com/docs/api-docs/50/927
     * @param array $params
     * @return ResultSet
     */
    public function yuncCreateOutboundOrderToB(array $params = []);

    /**
     * erp创建入库单
     * @link https://op.jinritemai.com/docs/api-docs/50/899
     * @param array $params
     * @return ResultSet
     */
    public function yuncErpInboundCreate(array $params = []);

    /**
     * 云仓出库接单
     * @link https://op.jinritemai.com/docs/api-docs/50/898
     * @param array $params
     * @return ResultSet
     */
    public function yuncCloudCreateOutboundOrder(array $params = []);

    /**
     * 云仓出库取消
     * @link https://op.jinritemai.com/docs/api-docs/50/873
     * @param array $params
     * @return ResultSet
     */
    public function yuncCloudCancelOutboundOrder(array $params = []);

    /**
     * 销退单入库
     * @link https://op.jinritemai.com/docs/api-docs/50/872
     * @param array $params
     * @return ResultSet
     */
    public function yuncCloudCreateInboundOrder(array $params = []);

    /**
     * toB场景取消出库单
     * @link https://op.jinritemai.com/docs/api-docs/50/745
     * @param array $params
     * @return ResultSet
     */
    public function yuncCancelOutboundOrderToB(array $params = []);

    /**
     * 仓储系统回传发货信息
     * @link https://op.jinritemai.com/docs/api-docs/50/1374
     * @param array $params
     * @return ResultSet
     */
    public function wmsDeliveryInfoNotify(array $params = []);

    /**
     * 入库明细回传，WMS回传入库数据时，使用该接口回传
     * @link https://op.jinritemai.com/docs/api-docs/50/1357
     * @param array $params
     * @return ResultSet
     */
    public function wmsInboundDetailNotify(array $params = []);

    /**
     * 云仓出库接单toB
     * @link https://op.jinritemai.com/docs/api-docs/50/1198
     * @param array $params
     * @return ResultSet
     */
    public function yuncCloudCreateOutboundOrderToB(array $params = []);

    /**
     * erp创建入库单
     * @link https://op.jinritemai.com/docs/api-docs/50/1197
     * @param array $params
     * @return ResultSet
     */
    public function yuncCloudCreateInboundOrderToB(array $params = []);

    /**
     * 云仓出库取消toB
     * @link https://op.jinritemai.com/docs/api-docs/50/1196
     * @param array $params
     * @return ResultSet
     */
    public function yuncCloudCancelOutboundOrderToB(array $params = []);

    /**
     * 普通入库取消
     * @link https://op.jinritemai.com/docs/api-docs/50/1195
     * @param array $params
     * @return ResultSet
     */
    public function yuncCloudCancelInboundOrderToB(array $params = []);

    /**
     * 素材中心--素材搜索接口
     * @link https://op.jinritemai.com/docs/api-docs/50/1148
     * @param array $params
     * @return ResultSet
     */
    public function materialSearchMaterial(array $params = []);

    /**
     * 库存调整(盘点和转移)
     * @link https://op.jinritemai.com/docs/api-docs/50/1870
     * @param array $params
     * @return ResultSet
     */
    public function yuncAdjustInventory(array $params = []);

    /**
     * 销退入库取消
     * @link https://op.jinritemai.com/docs/api-docs/50/1867
     * @param array $params
     * @return ResultSet
     */
    public function yuncCloudCancelInboundOrder(array $params = []);

    /**
     * 给外部WMS调用的推送出库信息回传
     * @link https://op.jinritemai.com/docs/api-docs/50/1868
     * @param array $params
     * @return ResultSet
     */
    public function yuncPushOutboundFeedback(array $params = []);

    /**
     * 回告销退单状态
     * @link https://op.jinritemai.com/docs/api-docs/50/1866
     * @param array $params
     * @return ResultSet
     */
    public function storageNotifySaleReturnStatus(array $params = []);

    /**
     * 取消入库单
     * @link https://op.jinritemai.com/docs/api-docs/50/1869
     * @param array $params
     * @return ResultSet
     */
    public function yuncErpInboundCancel(array $params = []);

    /**
     * 库存快照回传
     * @link https://op.jinritemai.com/docs/api-docs/50/2160
     * @param array $params
     * @return ResultSet
     */
    public function yuncSyncInventorySnapshot(array $params = []);

    /**
     * 货品数据采集接口
     * @link https://op.jinritemai.com/docs/api-docs/50/2159
     * @param array $params
     * @return ResultSet
     */
    public function yuncSyncCollectInfo(array $params = []);

    /**
     * 即时配轨迹推送接口
     * @link https://op.jinritemai.com/docs/api-docs/50/2109
     * @param array $params
     * @return ResultSet
     */
    public function logisticsIndTrackPush(array $params = []);
}
