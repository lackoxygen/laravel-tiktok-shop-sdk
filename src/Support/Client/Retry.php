<?php

namespace Lackoxygen\TiktokShop\Support\Client;

use Lackoxygen\TiktokShop\Exception\ClientException;
use Lackoxygen\TiktokShop\Exception\RetryException;

class Retry
{
    /**
     * @var \Closure
     */
    protected \Closure $execute;

    /**
     * @var \Closure
     */
    protected \Closure $when;

    /**
     * @param \Closure $execute
     * @param \Closure $when
     */
    public function __construct(\Closure $execute, \Closure $when)
    {
        $this->execute = $execute;

        $this->when = $when;
    }

    /**
     * @param int $retries
     * @param int $waitMilliseconds
     *
     * @return mixed|void
     * @throws ClientException
     * @throws RetryException
     */
    public function __invoke(int $retries = 3, int $waitMilliseconds = 500)
    {
        $callback = $this->execute;
        $when = $this->when;
        $attempts = 0;
        do {
            try {
                return $callback($retries);
            } catch (\Throwable $e) {
                if (!$when($e)) {
                    throw new ClientException($e);
                }
                $waitMilliseconds && usleep($waitMilliseconds * 1000);
            } finally {
                ++$attempts;
            }
        } while ($attempts < $retries);

        throw new RetryException(sprintf('maximum number of attempts(%d) reached', $attempts));
    }
}
