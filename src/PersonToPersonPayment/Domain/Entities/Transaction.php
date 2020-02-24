<?php

namespace PicPay\FraudCheck\PersonToPersonPayment\Domain\Entities;

use PicPay\FraudCheck\Shared\Domain\Transaction\ValueObject\TransactionId;

/**
 * Class Transaction
 *
 * @package PicPay\FraudCheck\Shared\Domain\Entities
 */
final class Transaction
{
    /**
     * @var TransactionId
     */
    private $id;

    /**
     * Transaction constructor.
     *
     * @param TransactionId $id
     */
    public function __construct(TransactionId $id)
    {
        $this->id = $id;
    }

    /**
     * @param TransactionId $id
     * @return Transaction
     */
    public static function create(TransactionId $id)
    {
        return new self($id);
    }
}
