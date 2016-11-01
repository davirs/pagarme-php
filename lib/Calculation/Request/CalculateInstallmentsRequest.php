<?php

namespace PagarMe\Sdk\Calculation\Request;

use PagarMe\Sdk\Request;

class CalculateInstallmentsRequest implements Request
{
    /**
     * @var int | Valor máximo de parcelas
     */
    private $maxInstallments;

    /**
     * @var int | Número de parcelas isentas de juros
     */
    private $freeInstallments;

    /**
     * @var int | Valor da taxa de juros
     */
    private $interestRate;

    /**
     * @var int | Valor do produto/serviço vendido
     */
    private $amount;

    /**
     * @param int $amount
     * @param int $interestRate
     * @param int $freeInstallments
     * @param int $maxInstallments
     */
    public function __construct(
        $amount,
        $interestRate,
        $freeInstallments,
        $maxInstallments
    ) {
        $this->amount           = $amount;
        $this->interestRate     = $interestRate;
        $this->freeInstallments = $freeInstallments;
        $this->maxInstallments  = $maxInstallments;
    }

    /**
     * @return array
     */
    public function getPayload()
    {
        return [
            'amount'            => $this->amount,
            'interest_rate'     => $this->interestRate,
            'free_installments' => $this->freeInstallments,
            'max_installments'  => $this->maxInstallments
        ];
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return 'transactions/calculate_installments_amount';
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return 'GET';
    }
}