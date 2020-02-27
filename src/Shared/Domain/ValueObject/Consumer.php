<?php

namespace Company\FraudCheck\Shared\Domain\ValueObject;

/**
 * Class Consumer
 *
 * @package Company\FraudCheck\Shared\Domain\ValueObject
 */
abstract class Consumer
{
    /**
     * @var ConsumerId
     */
    private $id;

    /**
     * Consumer constructor.
     *
     * @param ConsumerId $id
     */
    public function __construct(ConsumerId $id)
    {
        $this->id = $id;
    }

    /**
     * @return ConsumerId
     */
    public function id(): ConsumerId
    {
        return $this->id;
    }
}
