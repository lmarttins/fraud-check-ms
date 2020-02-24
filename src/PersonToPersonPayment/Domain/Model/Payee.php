<?php

namespace PicPay\FraudCheck\PersonToPersonPayment\Domain\Model;

use PicPay\FraudCheck\Shared\Domain\ValueObject\ConsumerId;

/**
 * Class Payee
 *
 * @package PicPay\FraudCheck\PersonToPersonPayment\Domain\Model
 */
final class Payee
{
    /**
     * @var ConsumerId
     */
    private $id;

    /**
     * Payee constructor.
     *
     * @param ConsumerId $id
     */
    public function __construct(ConsumerId $id)
    {
        $this->id = $id;
    }

    /**
     * @param ConsumerId $id
     * @return Payee
     */
    public static function create(ConsumerId $id)
    {
        return new self($id);
    }
}
