<?php

namespace Lackoxygen\TiktokShop\Request\Member;

use Lackoxygen\TiktokShop\Request\Request;

class Member extends Request implements MemberInterface
{
    /**
     * @inheritDoc
     */
    public function memberBatchUpdate(array $params = [])
    {
        $this->builder->method('POST')
            ->service('member.batchUpdate')
            ->path('/member/batchUpdate')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function memberBatchGetUnionIdByOpenIdList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('member.batchGetUnionIdByOpenIdList')
            ->path('/member/batchGetUnionIdByOpenIdList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function memberJoinShopMemberWithMobileId(array $params = [])
    {
        $this->builder->method('POST')
            ->service('member.JoinShopMemberWithMobileId')
            ->path('/member/JoinShopMemberWithMobileId')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function memberGetOuterShopMemberConf(array $params = [])
    {
        $this->builder->method('POST')
            ->service('member.GetOuterShopMemberConf')
            ->path('/member/GetOuterShopMemberConf')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function memberGetUserShopMemberCard(array $params = [])
    {
        $this->builder->method('POST')
            ->service('member.GetUserShopMemberCard')
            ->path('/member/GetUserShopMemberCard')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function memberGetJoinBonusCountForUser(array $params = [])
    {
        $this->builder->method('POST')
            ->service('member.GetJoinBonusCountForUser')
            ->path('/member/GetJoinBonusCountForUser')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function memberBatchGetHistoryMemberUnionId(array $params = [])
    {
        $this->builder->method('POST')
            ->service('member.batchGetHistoryMemberUnionId')
            ->path('/member/batchGetHistoryMemberUnionId')
            ->params($params);
    }
}
