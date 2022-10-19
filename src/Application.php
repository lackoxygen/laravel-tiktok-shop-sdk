<?php

namespace Lackoxygen\TiktokShop;

use Illuminate\Support\Arr;
use Lackoxygen\TiktokShop\Attribute\Config\Config;
use Lackoxygen\TiktokShop\Attribute\Config\Option;
use Lackoxygen\TiktokShop\Request\RequestProxy;
use Lackoxygen\TiktokShop\Support\Verify;

/**
 * @method Verify verify()
 * @method Request\Pigeon\PigeonInterface pigeon()
 * @method Request\Sms\SmsInterface sms()
 * @method Request\SupplyChain\SupplyChainInterface supplyChain()
 * @method Request\Topup\TopupInterface topup()
 * @method Request\OpenCloud\OpenCloudInterface openCloud()
 * @method Request\Btas\BtasInterface btas()
 * @method Request\Recycle\RecycleInterface recycle()
 * @method Request\Member\MemberInterface member()
 * @method Request\Buyin\BuyinInterface buyin()
 * @method Request\Yunc\YuncInterface yunc()
 * @method Request\OrderCode\OrderCodeInterface orderCode()
 * @method Request\Coupons\CouponsInterface coupons()
 * @method Request\Crossborder\CrossborderInterface crossborder()
 * @method Request\Iop\IopInterface iop()
 * @method Request\Antispam\AntispamInterface antispam()
 * @method Request\Token\TokenInterface token()
 * @method Request\Order\OrderInterface order()
 * @method Request\AfterSale\AfterSaleInterface afterSale()
 * @method Request\Logistics\LogisticsInterface logistics()
 * @method Request\Warehouse\WarehouseInterface warehouse()
 * @method Request\Product\ProductInterface product()
 * @method Request\Material\MaterialInterface material()
 * @method Request\Address\AddressInterface address()
 */
class Application
{
    /**
     * @var Option
     */
    protected Option $config;

    /**
     * @var array|string[]
     */
    protected array $fixedPriority = [
        'verify' => Verify::class
    ];

    /**
     * @param $options
     */
    public function __construct($options = null)
    {
        if (!$options instanceof Config) {
            if (is_array($options)) {
                $config = static::newConfig($options);
                goto next;
            }

            $app = $options ?: 'default';

            $config = \config(ServiceProvider::$name . '.' . $app);

            if (!is_array($config)) {
                throw new \InvalidArgumentException('config file not found');
            }
            $config = static::newConfig($config);
        } else {
            $config = $options;
        }
        next:
        $this->config = $config;
    }

    /**
     * @param array $options
     *
     * @return Option
     */
    public static function newConfig(array $options): Option
    {
        return new Option(
            Arr::get($options, 'app_key'),
            Arr::get($options, 'app_secret'),
            Arr::get($options, 'base_uri'),
            (float)Arr::get($options, 'timeout'),
            Arr::get($options, 'enable_mock')
        );
    }

    /**
     * @param $options
     *
     * @return Application
     */
    public static function use($options = null): Application
    {
        return new static($options);
    }

    /**
     * @param string $accessToken
     *
     * @return Application
     */
    public function setAccessToken(string $accessToken): Application
    {
        $this->config->setAccessToken($accessToken);

        return $this;
    }

    /**
     * @param string $name
     * @return RequestProxy|object
     */
    private function guide(string $name)
    {
        if (array_key_exists($name, $this->fixedPriority)) {
            return new $this->fixedPriority[$name]($this->config);
        }

        $name = ucfirst($name);

        $request = '\Lackoxygen\TiktokShop\Request\\' . $name . '\\' . $name;

        if (!class_exists($request)) {
            throw new \OverflowException('class file(' . $request . ') not found');
        }

        return RequestProxy::proxy($request, $this->config);
    }

    /**
     * @param $name
     * @param array $arguments
     *
     * @return RequestProxy
     */
    public function __call($name, array $arguments = [])
    {
        $guide = $this->guide($name);

        try {
            return $guide;
        } finally {
            if ($guide instanceof RequestProxy) {
                register_shutdown_function(function () {
                    $this->config->setAccessToken('');
                });
            }
        }
    }
}
