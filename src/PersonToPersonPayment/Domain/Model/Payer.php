<?php

namespace PicPay\FraudCheck\PersonToPersonPayment\Domain\Model;

use PicPay\FraudCheck\Shared\Domain\ValueObject\ConsumerId;

/**
 * Class Payer
 *
 * @package PicPay\FraudCheck\PersonToPersonPayment\Domain\Model
 */
final class Payer
{
    /**
     * @var ConsumerId
     */
    private $id;

    /**
     * Payer constructor.
     *
     * @param ConsumerId $id
     */
    public function __construct(ConsumerId $id)
    {
        $this->id = $id;
    }

    /**
     * @param ConsumerId $id
     * @return Payer
     */
    public static function create(ConsumerId $id)
    {
        return new self($id);
    }
}
