<?php

namespace Peyman136\SnappPay\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Peyman136\SnappPay\SnappPay
 */
class SnappPay extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Peyman136\SnappPay\SnappPay::class;
    }
}
