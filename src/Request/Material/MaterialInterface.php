<?php

namespace Lackoxygen\TiktokShop\Request\Material;

use Lackoxygen\TiktokShop\Response\ResultSet;

/**
 * @note 素材中心API
 */
interface MaterialInterface
{
    /**
     * 创建文件夹
     * @link https://op.jinritemai.com/docs/api-docs/69/946
     * @param array $params
     * @return ResultSet
     */
    public function materialCreateFolder(array $params = []);

    /**
     * 编辑/移动文件夹
     * @link https://op.jinritemai.com/docs/api-docs/69/948
     * @param array $params
     * @return ResultSet
     */
    public function materialEditFolder(array $params = []);

    /**
     * 将文件夹移动到回收站
     * @link https://op.jinritemai.com/docs/api-docs/69/947
     * @param array $params
     * @return ResultSet
     */
    public function materialMoveFolderToRecycleBin(array $params = []);

    /**
     * 移动素材到回收站
     * @link https://op.jinritemai.com/docs/api-docs/69/951
     * @param array $params
     * @return ResultSet
     */
    public function materialMoveMaterialToRecycleBin(array $params = []);

    /**
     * 从回收站中恢复素材
     * @link https://op.jinritemai.com/docs/api-docs/69/954
     * @param array $params
     * @return ResultSet
     */
    public function materialRecoverMaterial(array $params = []);

    /**
     * 编辑素材
     * @link https://op.jinritemai.com/docs/api-docs/69/956
     * @param array $params
     * @return ResultSet
     */
    public function materialEditMaterial(array $params = []);

    /**
     * 批量上传视频到素材中心
     * @link https://op.jinritemai.com/docs/api-docs/69/1617
     * @param array $params
     * @return ResultSet
     */
    public function materialBatchUploadVideoAsync(array $params = []);

    /**
     * 批量上传图片到素材中心
     * @link https://op.jinritemai.com/docs/api-docs/69/1616
     * @param array $params
     * @return ResultSet
     */
    public function materialBatchUploadImageSync(array $params = []);

    /**
     * 查看文件夹详情
     * @link https://op.jinritemai.com/docs/api-docs/69/1150
     * @param array $params
     * @return ResultSet
     */
    public function materialGetFolderInfo(array $params = []);

    /**
     * 搜索文件夹
     * @link https://op.jinritemai.com/docs/api-docs/69/1149
     * @param array $params
     * @return ResultSet
     */
    public function materialSearchFolder(array $params = []);

    /**
     * 素材中心--异步上传视频接口
     * @link https://op.jinritemai.com/docs/api-docs/69/1147
     * @param array $params
     * @return ResultSet
     */
    public function materialUploadVideoAsync(array $params = []);

    /**
     * 同步上传素材
     * @link https://op.jinritemai.com/docs/api-docs/69/1146
     * @param array $params
     * @return ResultSet
     */
    public function materialUploadImageSync(array $params = []);

    /**
     * 根据素材id查素材详情
     * @link https://op.jinritemai.com/docs/api-docs/69/1145
     * @param array $params
     * @return ResultSet
     */
    public function materialQueryMaterialDetail(array $params = []);

    /**
     * 彻底删除文件夹
     * @link https://op.jinritemai.com/docs/api-docs/69/1139
     * @param array $params
     * @return ResultSet
     */
    public function materialDeleteFolder(array $params = []);

    /**
     * 彻底删除素材
     * @link https://op.jinritemai.com/docs/api-docs/69/1138
     * @param array $params
     * @return ResultSet
     */
    public function materialDeleteMaterial(array $params = []);

    /**
     * 从回收站恢复文件夹
     * @link https://op.jinritemai.com/docs/api-docs/69/1096
     * @param array $params
     * @return ResultSet
     */
    public function materialRecoverFolder(array $params = []);

    /**
     * 获取商家容量详情
     * @link https://op.jinritemai.com/docs/api-docs/69/1694
     * @param array $params
     * @return ResultSet
     */
    public function materialGetCapInfo(array $params = []);

    /**
     * 批量获取视频信息
     * @link https://op.jinritemai.com/docs/api-docs/69/2164
     * @param array $params
     * @return ResultSet
     */
    public function materialMGetPlayInfo(array $params = []);

    /**
     * 一键删除
     * @link https://op.jinritemai.com/docs/api-docs/69/1955
     * @param array $params
     * @return ResultSet
     */
    public function materialEasyShuttle(array $params = []);
}
