<?php

namespace Lackoxygen\TiktokShop\Response;

use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Arr;
use Lackoxygen\TiktokShop\Util\Json;

class ResultSet
{
    /**
     * @var array|mixed
     */
    protected array $items = [];

    /**
     * @var Response
     */
    protected Response $response;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        $this->response = $response;

        $this->items = Json::unmarshal($response->getBody()->getContents());
    }

    /**
     * @return bool
     */
    public function isSuccess(): bool
    {
        $array = $this->toArray();

        return 10000 === $array['code'];
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        $array = $this->toArray();

        return (string)$array['sub_msg'] ?? '';
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        $array = $this->toArray();

        return (array)Arr::get($array, 'data', []);
    }

    /**
     * @param string $key
     * @param string $default
     * @return array|\ArrayAccess|mixed
     */
    public function get(string $key, string $default = '')
    {
        return Arr::get($this->getData(), $key, $default);
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return $this->items;
    }

    /**
     * @return false|string
     */
    public function toJson()
    {
        return Json::marshal($this->toArray());
    }

    /**
     * @return string
     */
    public function raw(): string
    {
        $body = $this->response->getBody();

        $body->rewind();

        return $body->getContents();
    }
}
