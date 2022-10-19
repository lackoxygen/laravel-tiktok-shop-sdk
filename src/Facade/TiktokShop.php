<?php

namespace Lackoxygen\TiktokShop\Facade;

use Lackoxygen\TiktokShop\Request;
use Illuminate\Support\Facades\Facade;
use Lackoxygen\TiktokShop\Support\Verify;
use Lackoxygen\TiktokShop\Application;

/**
 * @method static Application setAccessToken(string $accessToken)
 * @method static Application use ($options)
 * @method static Verify verify()
 * @method static Request\Pigeon\PigeonInterface pigeon()
 * @method static Request\Sms\SmsInterface sms()
 * @method static Request\SupplyChain\SupplyChainInterface supplyChain()
 * @method static Request\Topup\TopupInterface topup()
 * @method static Request\OpenCloud\OpenCloudInterface openCloud()
 * @method static Request\Btas\BtasInterface btas()
 * @method static Request\Recycle\RecycleInterface recycle()
 * @method static Request\Member\MemberInterface member()
 * @method static Request\Buyin\BuyinInterface buyin()
 * @method static Request\Yunc\YuncInterface yunc()
 * @method static Request\OrderCode\OrderCodeInterface orderCode()
 * @method static Request\Coupons\CouponsInterface coupons()
 * @method static Request\Crossborder\CrossborderInterface crossborder()
 * @method static Request\Iop\IopInterface iop()
 * @method static Request\Antispam\AntispamInterface antispam()
 * @method static Request\Token\TokenInterface token()
 * @method static Request\Order\OrderInterface order()
 * @method static Request\AfterSale\AfterSaleInterface afterSale()
 * @method static Request\Logistics\LogisticsInterface logistics()
 * @method static Request\Warehouse\WarehouseInterface warehouse()
 * @method static Request\Product\ProductInterface product()
 * @method static Request\Material\MaterialInterface material()
 * @method static Request\Address\AddressInterface address()
 */

class TiktokShop extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return Application::class;
    }
}
