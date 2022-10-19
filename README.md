# desc
- 抖店php

# 安装

```
composer require lackoxygen/tiktok_shop
```

# 配置文件
- config/tiktok.shop.php
```
[
    'app_key'     => env('TIKTOK_APP_KEY', ''),
    'app_secret'  => env('TIKTOK_APP_SECRET', ''),
    'enable_mock' => env('TIKTOK_ENABLE_MOCK', false),
    'base_uri'    => env('TIKTOK_BASE_URI', 'https://openapi-sandbox.jinritemai.com'),
    'timeout'     => env('TIKTOK_TIMEOUT', 30),
];
```

# 使用方法

- 门面调用

```php
use Lackoxygen\TiktokShop\Facade\TiktokShop;
TiktokShop::address()->addressCreate([]);
```

- new

```php
use Lackoxygen\TiktokShop\TiktokShop;
$config = Lackoxygen\TiktokShop\TiktokShop::newConfig(config('some'));
$obj = new Lackoxygen\TiktokShop\TiktokShop($config);
```

- 判断请求成功
```php
use Lackoxygen\TiktokShop\Facade\TiktokShop;
$resultSet = TiktokShop::alliance()->materialsProductsSearch([]);
if ($resultSet->isSuccess()){
    exit(0)
}
exit(-1)
```

- 签名

```php
use Lackoxygen\TiktokShop\Facade\TiktokShop;
$resultSet = TiktokShop::verify()->md5('some', 'body');
if ($resultSet->isSuccess()){
    exit(0)
}
exit(-1)
```

- 超时

```php
use Lackoxygen\TiktokShop\Facade\TiktokShop;
try {
    $resultSet = TiktokShop::alliance()->materialsProductsSearch([]);
 }catch (\Lackoxygen\TiktokShop\Exception\RetryException $retryException){
    exit(0)
 }
exit(-1)
```

- 构造请求方法

```php
php bin/release.php
```
