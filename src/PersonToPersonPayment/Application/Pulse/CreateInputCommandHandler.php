<?php

namespace PicPay\FraudCheck\PersonToPersonPayment\Application\Pulse;

use PicPay\FraudCheck\PersonToPersonPayment\Domain\ValueObject\Payee;
use PicPay\FraudCheck\PersonToPersonPayment\Domain\ValueObject\Payer;
use PicPay\FraudCheck\PersonToPersonPayment\Domain\ValueObject\Transaction;
use PicPay\FraudCheck\Shared\Domain\Transaction\ValueObject\TransactionId;
use PicPay\FraudCheck\Shared\Domain\ValueObject\ConsumerId;

/**
 * Class CreateInputCommandHandler
 *
 * @package PicPay\FraudCheck\PersonToPersonPayment\Application\Pulse
 */
class CreateInputCommandHandler
{
    /**
     * @param CreateInputCommand $command
     */
    public function handle(CreateInputCommand $command)
    {
        $payer = new Payer(new ConsumerId($command->payerId()));
        $payee = new Payee(new ConsumerId($command->payeeId()));

        $transaction = new Transaction(
            new TransactionId($command->transactionId()),
            $payer,
            $payee
        );
    }
}
