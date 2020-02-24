<?php

namespace PicPay\FraudCheck\Shared\Domain\ValueObject;

/**
 * Class IntValueObject
 *
 * @package PicPay\FraudCheck\Shared\Domain\ValueObject
 */
abstract class IntValueObject
{
    /**
     * @var int
     */
    protected $value;

    /**
     * IntValueObject constructor.
     *
     * @param int $value
     */
    public function __construct(int $value)
    {
        $this->value = $value;
    }

    /**
     * @return int
     */
    public function value(): int
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->value();
    }
}
