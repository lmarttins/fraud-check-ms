<?php

namespace Company\FraudCheck\PersonToPersonPayment\Domain\ValueObject;

use Company\FraudCheck\Shared\Domain\Transaction\ValueObject\TransactionId;

/**
 * Class Transaction
 *
 * @package Company\FraudCheck\PersonToPersonPayment\Domain\Model
 */
final class Transaction
{
    /**
     * @var TransactionId
     */
    private $id;

    /**
     * @var Payer
     */
    private $payer;

    /**
     * @var Payee
     */
    private $payee;

    /**
     * Transaction constructor.
     *
     * @param TransactionId $id
     * @param Payer $payer
     * @param Payee $payee
     */
    public function __construct(
        TransactionId $id,
        Payer $payer,
        Payee $payee
    ) {
        $this->id = $id;
        $this->payer = $payer;
        $this->payee = $payee;
    }

    /**
     * @return TransactionId
     */
    public function id(): TransactionId
    {
        return $this->id;
    }

    /**
     * @return Payer
     */
    public function payer(): Payer
    {
        return $this->payer;
    }

    /**
     * @return Payee
     */
    public function payee(): Payee
    {
        return $this->payee;
    }
}
