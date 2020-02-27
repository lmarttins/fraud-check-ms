<?php

namespace Company\FraudCheck\PersonToPersonPayment\Application\Pulse;

use Company\FraudCheck\PersonToPersonPayment\Domain\ValueObject\Payee;
use Company\FraudCheck\PersonToPersonPayment\Domain\ValueObject\Payer;
use Company\FraudCheck\PersonToPersonPayment\Domain\ValueObject\Transaction;
use Company\FraudCheck\Shared\Domain\Transaction\ValueObject\TransactionId;
use Company\FraudCheck\Shared\Domain\ValueObject\ConsumerId;

/**
 * Class CreateInputCommandHandler
 *
 * @package Company\FraudCheck\PersonToPersonPayment\Application\Pulse
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
