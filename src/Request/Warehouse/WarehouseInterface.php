<?php

namespace Lackoxygen\TiktokShop\Request\Warehouse;

use Lackoxygen\TiktokShop\Response\ResultSet;

/**
 * @note 库存API
 */
interface WarehouseInterface
{
    /**
     * 查询库存
     * @link https://op.jinritemai.com/docs/api-docs/34/936
     * @param array $params
     * @return ResultSet
     */
    public function skuStockNum(array $params = []);

    /**
     * 修改sku库存
     * @link https://op.jinritemai.com/docs/api-docs/34/155
     * @param array $params
     * @return ResultSet
     */
    public function skuSyncStock(array $params = []);

    /**
     * 库存调整(盘点和转移)
     * @link https://op.jinritemai.com/docs/api-docs/34/760
     * @param array $params
     * @return ResultSet
     */
    public function warehouseadjustInventory(array $params = []);

    /**
     * 批量同步接口
     * @link https://op.jinritemai.com/docs/api-docs/34/298
     * @param array $params
     * @return ResultSet
     */
    public function skuSyncStockBatch(array $params = []);

    /**
     * 修改围栏信息
     * @link https://op.jinritemai.com/docs/api-docs/34/1784
     * @param array $params
     * @return ResultSet
     */
    public function warehouseSetFence(array $params = []);

    /**
     * 获取电子围栏信息/列表
     * @link https://op.jinritemai.com/docs/api-docs/34/1783
     * @param array $params
     * @return ResultSet
     */
    public function warehouseGetFences(array $params = []);

    /**
     * 创建电子围栏
     * @link https://op.jinritemai.com/docs/api-docs/34/1778
     * @param array $params
     * @return ResultSet
     */
    public function warehouseCreateFence(array $params = []);

    /**
     * 接绑电子围栏
     * @link https://op.jinritemai.com/docs/api-docs/34/1913
     * @param array $params
     * @return ResultSet
     */
    public function warehouseUnbindFences(array $params = []);

    /**
     * 地址与区域仓解绑
     * @link https://op.jinritemai.com/docs/api-docs/34/1899
     * @param array $params
     * @return ResultSet
     */
    public function warehouseRemoveAddr(array $params = []);

    /**
     * 设置sku发货时效
     * @link https://op.jinritemai.com/docs/api-docs/34/1864
     * @param array $params
     * @return ResultSet
     */
    public function promiseSetSkuShipTime(array $params = []);

    /**
     * 查询区域仓
     * @link https://op.jinritemai.com/docs/api-docs/34/1857
     * @param array $params
     * @return ResultSet
     */
    public function warehouseInfo(array $params = []);

    /**
     * 编辑区域仓
     * @link https://op.jinritemai.com/docs/api-docs/34/1856
     * @param array $params
     * @return ResultSet
     */
    public function warehouseEdit(array $params = []);

    /**
     * 创建单个区域仓
     * @link https://op.jinritemai.com/docs/api-docs/34/1855
     * @param array $params
     * @return ResultSet
     */
    public function warehouseCreate(array $params = []);

    /**
     * 绑定单个地址到区域仓
     * @link https://op.jinritemai.com/docs/api-docs/34/1859
     * @param array $params
     * @return ResultSet
     */
    public function warehouseSetAddr(array $params = []);

    /**
     * 批量查询区域仓
     * @link https://op.jinritemai.com/docs/api-docs/34/1858
     * @param array $params
     * @return ResultSet
     */
    public function warehouseList(array $params = []);

    /**
     * 批量绑定地址与区域仓
     * @link https://op.jinritemai.com/docs/api-docs/34/1861
     * @param array $params
     * @return ResultSet
     */
    public function warehouseSetAddrBatch(array $params = []);

    /**
     * 批量创建区域仓
     * @link https://op.jinritemai.com/docs/api-docs/34/1862
     * @param array $params
     * @return ResultSet
     */
    public function warehouseCreateBatch(array $params = []);

    /**
     * 设置指定地址下的仓的优先级
     * @link https://op.jinritemai.com/docs/api-docs/34/1863
     * @param array $params
     * @return ResultSet
     */
    public function warehouseSetPriority(array $params = []);

    /**
     * 删除电子围栏
     * @link https://op.jinritemai.com/docs/api-docs/34/2065
     * @param array $params
     * @return ResultSet
     */
    public function warehouseDelFence(array $params = []);

    /**
     * 仓绑定电子围栏
     * @link https://op.jinritemai.com/docs/api-docs/34/2062
     * @param array $params
     * @return ResultSet
     */
    public function warehouseBindFences(array $params = []);
}
