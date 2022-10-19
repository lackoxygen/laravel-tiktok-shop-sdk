<?php

namespace Lackoxygen\TiktokShop\Support\Client;

use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\RequestOptions;
use Illuminate\Support\Str;
use Lackoxygen\TiktokShop\Attribute\Config\Option;
use Lackoxygen\TiktokShop\Attribute\Request;
use Lackoxygen\TiktokShop\Exception\ClientException;
use Lackoxygen\TiktokShop\Exception\RetryException;
use Lackoxygen\TiktokShop\Util\Json;
use Lackoxygen\TiktokShop\Util\Signature;
use Lackoxygen\TiktokShop\Util\Sort;
use Psr\Http\Message\ResponseInterface;

class Client
{
    /**
     * @return Client
     */
    public static function create(): Client
    {
        return new self();
    }

    /**
     * @param string $service
     *
     * @return string
     */
    protected function serviceToPath(string $service): string
    {
        return '/' . ltrim(Str::replace('.', '/', $service), '/');
    }

    /**
     * @param Request $request
     *
     * @return false|string
     */
    protected function signature(Request $request): ?string
    {
        $sig = new Signature();
        $sig->setTimestamp($request->getTimestamp());
        $sig->setMethod($request->getService());
        $sig->setAppKey($request->getConfig()->getAppKey());
        $sig->setAppSecret($request->getConfig()->getAppSecret());
        $sig->setVersion($request->getV());
        $params = $request->getParams();
        Sort::ksort($params);
        $sig->setParamJson(Json::marshal($params));

        return $sig->generate();
    }

    /**
     * @param Request $request
     *
     * @return array
     */
    protected function withSignatureQuery(Request $request): array
    {
        $params = $request->getParams();
        Sort::ksort($params);

        return [
            'method' => $request->getService(),
            'app_key' => $request->getConfig()->getAppKey(),
            'access_token' => $request->getConfig()->getAccessToken(),
            'param_json' => Json::marshal($params),
            'timestamp' => $request->getTimestamp(),
            'v' => $request->getV(),
            'sign' => $this->signature($request),
            'sign_method' => 'hmac-sha256',
        ];
    }

    /**
     * @param Request $request
     * @return array
     */
    protected function withQuery(Request $request): array
    {
        return [
            'app_id' => $request->getConfig()->getAppKey(),
            'app_secret' => $request->getConfig()->getAppSecret(),
        ];
    }

    /**
     * @param Option $config
     * @return \GuzzleHttp\Client
     */
    public function guzzleHttp(Option $config): \GuzzleHttp\Client
    {
        return new \GuzzleHttp\Client([
            'base_uri' => $config->getBaseUri(),
            'timeout' => $config->getTimeout(),
            'verify' => false
        ]);
    }


    /**
     * @param Request $request
     *
     * @return ResponseInterface
     * @throws ClientException
     * @throws RetryException
     */
    public function request(Request $request): ResponseInterface
    {
        if ($request->isSignature()) {
            $query = $this->withSignatureQuery($request);
        } else {
            $query = $this->withQuery($request);
        }
        $options = [
            RequestOptions::HEADERS => [
                'Content-type' => 'application/json'
            ]
        ];
        $options[RequestOptions::QUERY] = $query;
        $options[RequestOptions::JSON] = $request->getParams();

        $retry = new Retry(function () use ($request, $options) {
            return $this->guzzleHttp($request->getConfig())
                ->request(
                    $request->getMethod(),
                    $request->getPath() ?: $this->serviceToPath($request->getService()),
                    $options
                );
        }, function ($e) {
            return $e instanceof ConnectException || $e instanceof ServerException;
        });

        return $retry();
    }
}
