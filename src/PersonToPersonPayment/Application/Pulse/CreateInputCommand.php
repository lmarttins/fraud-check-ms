<?php

namespace Company\FraudCheck\PersonToPersonPayment\Application\Pulse;

/**
 * Class CreateInputCommand
 *
 * @package Company\FraudCheck\PersonToPersonPayment\Application\Pulse
 */
class CreateInputCommand
{
    /**
     * @var string
     */
    private $transactionId;

    /**
     * @var string
     */
    private $payerId;

    /**
     * @var string
     */
    private $payeeId;

    /**
     * CreateInputCommand constructor.
     *
     * @param string $transactionId
     * @param string $payerId
     * @param string $payeeId
     */
    public function __construct(
        string $transactionId,
        string $payerId,
        string $payeeId
    ) {
        $this->transactionId = $transactionId;
        $this->payerId = $payerId;
        $this->payeeId = $payeeId;
    }

    public function transactionId(): string
    {
        return $this->transactionId;
    }

    public function payerId(): string
    {
        return $this->payerId;
    }

    public function payeeId(): string
    {
        return $this->payeeId;
    }
}
