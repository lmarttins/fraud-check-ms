<?php

namespace Lms\Accounts\Infrastructure\Messaging\Kafka\Consumers;

use Kafka\Consumer\Contracts\Consumer;

/**
 * Class CashbackConsumer
 *
 * @package Lms\Accounts\Infrastructure\Messaging\Kafka\Consumers
 */
class CashbackConsumer extends Consumer
{
    public function handle(string $message): void
    {
        print $message;
    }
}
