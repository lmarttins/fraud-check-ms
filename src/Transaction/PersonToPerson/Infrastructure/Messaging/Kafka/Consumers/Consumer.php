<?php

namespace PicPay\FraudDetection\Transaction\PersonToPerson\Infrastructure\Messaging\Kafka\Consumers;

use Kafka\Consumer\Contracts\Consumer as KafkaConsumer;

/**
 * Class Consumer
 *
 * @package PicPay\FraudDetection\Transaction\PersonToPerson\Infrastructure\Messaging\Kafka\Consumers
 */
class Consumer extends KafkaConsumer
{
    public function handle(string $message): void
    {
        print $message;
    }
}
