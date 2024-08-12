<?php

namespace Peyman136\SnappPay\Contracts;

interface CartListInterface
{
    /**
     * Get SnappPay cart list array.
     *
     * @return array
     */
    public function toArray(): array;
}
