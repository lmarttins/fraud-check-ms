<?php

namespace PicPay\FraudDetection\PersonToPerson\Infrastructure\Messaging\Kafka\Consumers;

use Kafka\Consumer\Contracts\Consumer as KafkaConsumer;

/**
 * Class Listener
 *
 * @package PicPay\FraudDetection\Transaction\PersonToPerson\Infrastructure\Messaging\Kafka\Consumers
 */
class Listener extends KafkaConsumer
{
    public function handle(string $message): void
    {
        print $message;
    }
}
