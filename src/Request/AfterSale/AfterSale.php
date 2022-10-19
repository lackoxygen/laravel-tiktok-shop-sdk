<?php

namespace Lackoxygen\TiktokShop\Request\AfterSale;

use Lackoxygen\TiktokShop\Request\Request;

class AfterSale extends Request implements AfterSaleInterface
{
    /**
     * @inheritDoc
     */
    public function afterSaleOperate(array $params = [])
    {
        $this->builder->method('POST')
            ->service('afterSale.operate')
            ->path('/afterSale/operate')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function afterSaleDetail(array $params = [])
    {
        $this->builder->method('POST')
            ->service('afterSale.Detail')
            ->path('/afterSale/Detail')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function afterSaleList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('afterSale.List')
            ->path('/afterSale/List')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function afterSaleAddOrderRemark(array $params = [])
    {
        $this->builder->method('POST')
            ->service('afterSale.addOrderRemark')
            ->path('/afterSale/addOrderRemark')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function afterSaleOpenAfterSaleChannel(array $params = [])
    {
        $this->builder->method('POST')
            ->service('afterSale.OpenAfterSaleChannel')
            ->path('/afterSale/OpenAfterSaleChannel')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function afterSaleBuyerExchangeConfirm(array $params = [])
    {
        $this->builder->method('POST')
            ->service('afterSale.buyerExchangeConfirm')
            ->path('/afterSale/buyerExchangeConfirm')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function afterSaleApplyLogisticsIntercept(array $params = [])
    {
        $this->builder->method('POST')
            ->service('afterSale.applyLogisticsIntercept')
            ->path('/afterSale/applyLogisticsIntercept')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function afterSaleCancelSendGoodsSuccess(array $params = [])
    {
        $this->builder->method('POST')
            ->service('afterSale.CancelSendGoodsSuccess')
            ->path('/afterSale/CancelSendGoodsSuccess')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function afterSaleReturnGoodsToWareHouseSuccess(array $params = [])
    {
        $this->builder->method('POST')
            ->service('afterSale.returnGoodsToWareHouseSuccess')
            ->path('/afterSale/returnGoodsToWareHouseSuccess')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function tradeRefundListSearch(array $params = [])
    {
        $this->builder->method('POST')
            ->service('trade.refundListSearch')
            ->path('/trade/refundListSearch')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function afterSaleTimeExtend(array $params = [])
    {
        $this->builder->method('POST')
            ->service('afterSale.timeExtend')
            ->path('/afterSale/timeExtend')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function afterSaleBuyerExchange(array $params = [])
    {
        $this->builder->method('POST')
            ->service('afterSale.buyerExchange')
            ->path('/afterSale/buyerExchange')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function afterSaleRejectReasonCodeList(array $params = [])
    {
        $this->builder->method('POST')
            ->service('afterSale.rejectReasonCodeList')
            ->path('/afterSale/rejectReasonCodeList')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function afterSaleFillLogistics(array $params = [])
    {
        $this->builder->method('POST')
            ->service('afterSale.fillLogistics')
            ->path('/afterSale/fillLogistics')
            ->params($params);
    }
}
