<?php

namespace Peyman136\SnappPay\Order;

use Peyman136\SnappPay\Abstracts\Order as AbstractsOrder;
use Peyman136\SnappPay\Cart\CartList;
use JetBrains\PhpStorm\ArrayShape;

class Order extends AbstractsOrder
{
    /**
     * SnappPay Order build cart list.
     *
     * @return array
     */
    #[ArrayShape(['cartId' => 'int', 'totalAmount' => 'int', 'shippingAmount' => 'int', 'isShipmentIncluded' => 'bool', 'taxAmount' => 'int', 'isTaxIncluded' => 'bool', 'cartItems' => 'array'])]
    public function buildCartList(): array
    {
        $cartList = new CartList($this);

        return $cartList->toArray();
    }
}
