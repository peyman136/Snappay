<?php

namespace Peyman136\SnappPay\Contracts;

interface OrderInterface
{
    /**
     * Build cart list from order.
     *
     * @return array
     */
    public function buildCartList(): array;
}
