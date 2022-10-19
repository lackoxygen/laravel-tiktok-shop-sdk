<?php

namespace Lackoxygen\TiktokShop\Request\Btas;

use Lackoxygen\TiktokShop\Response\ResultSet;

/**
 * @note BTAS质检API
 */
interface BtasInterface
{
    /**
     * 商家调用发货
     * @link https://op.jinritemai.com/docs/api-docs/49/489
     * @param array $params
     * @return ResultSet
     */
    public function btasShipping(array $params = []);

    /**
     * ⁣查询订单是否需要质检
     * @link https://op.jinritemai.com/docs/api-docs/49/473
     * @param array $params
     * @return ResultSet
     */
    public function btasGetInspectionOrder(array $params = []);

    /**
     * 图片质检送检
     * @link https://op.jinritemai.com/docs/api-docs/49/572
     * @param array $params
     * @return ResultSet
     */
    public function btasSaveInspectionOnline(array $params = []);

    /**
     * 获取订单的质检结果
     * @link https://op.jinritemai.com/docs/api-docs/49/573
     * @param array $params
     * @return ResultSet
     */
    public function btasGetOrderInspectionResult(array $params = []);

    /**
     * 商家送检调用
     * @link https://op.jinritemai.com/docs/api-docs/49/574
     * @param array $params
     * @return ResultSet
     */
    public function btasSaveInspectionInfo(array $params = []);

    /**
     * 获取可图片鉴定的品牌
     * @link https://op.jinritemai.com/docs/api-docs/49/1865
     * @param array $params
     * @return ResultSet
     */
    public function btasListBrand(array $params = []);
}
