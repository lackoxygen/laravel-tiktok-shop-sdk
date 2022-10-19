<?php

namespace Lackoxygen\TiktokShop\Request\Member;

use Lackoxygen\TiktokShop\Response\ResultSet;

/**
 * @note 会员中心API
 */
interface MemberInterface
{
    /**
     * 会员等级更新
     * @link https://op.jinritemai.com/docs/api-docs/66/329
     * @param array $params
     * @return ResultSet
     */
    public function memberBatchUpdate(array $params = []);

    /**
     * 【品牌会员专用】将openId转化成品牌会员商家的unionId
     * @link https://op.jinritemai.com/docs/api-docs/66/1790
     * @param array $params
     * @return ResultSet
     */
    public function memberBatchGetUnionIdByOpenIdList(array $params = []);

    /**
     * 加入会员接口
     * @link https://op.jinritemai.com/docs/api-docs/66/1806
     * @param array $params
     * @return ResultSet
     */
    public function memberJoinShopMemberWithMobileId(array $params = []);

    /**
     * 入会面板调用
     * @link https://op.jinritemai.com/docs/api-docs/66/1805
     * @param array $params
     * @return ResultSet
     */
    public function memberGetOuterShopMemberConf(array $params = []);

    /**
     * 电商会员卡面信息
     * @link https://op.jinritemai.com/docs/api-docs/66/1803
     * @param array $params
     * @return ResultSet
     */
    public function memberGetUserShopMemberCard(array $params = []);

    /**
     * 获取用户裂变引导入会人数
     * @link https://op.jinritemai.com/docs/api-docs/66/1801
     * @param array $params
     * @return ResultSet
     */
    public function memberGetJoinBonusCountForUser(array $params = []);

    /**
     * 【品牌会员店铺专用】根据店铺会员的openId获取品牌维度的用户身份标识unionId
     * @link https://op.jinritemai.com/docs/api-docs/66/2136
     * @param array $params
     * @return ResultSet
     */
    public function memberBatchGetHistoryMemberUnionId(array $params = []);
}
