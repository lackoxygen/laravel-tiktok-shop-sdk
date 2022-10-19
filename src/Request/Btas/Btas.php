<?php

namespace Lackoxygen\TiktokShop\Request\Btas;

use Lackoxygen\TiktokShop\Request\Request;

class Btas extends Request implements BtasInterface
{
    /**
     * @inheritDoc
     */
    public function btasShipping(array $params = [])
    {
        $this->builder->method('POST')
            ->service('btas.shipping')
            ->path('/btas/shipping')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function btasGetInspectionOrder(array $params = [])
    {
        $this->builder->method('POST')
            ->service('btas.getInspectionOrder')
            ->path('/btas/getInspectionOrder')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function btasSaveInspectionOnline(array $params = [])
    {
        $this->builder->method('POST')
            ->service('btas.saveInspectionOnline')
            ->path('/btas/saveInspectionOnline')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function btasGetOrderInspectionResult(array $params = [])
    {
        $this->builder->method('POST')
            ->service('btas.getOrderInspectionResult')
            ->path('/btas/getOrderInspectionResult')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function btasSaveInspectionInfo(array $params = [])
    {
        $this->builder->method('POST')
            ->service('btas.saveInspectionInfo')
            ->path('/btas/saveInspectionInfo')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function btasListBrand(array $params = [])
    {
        $this->builder->method('POST')
            ->service('btas.listBrand')
            ->path('/btas/listBrand')
            ->params($params);
    }
}
