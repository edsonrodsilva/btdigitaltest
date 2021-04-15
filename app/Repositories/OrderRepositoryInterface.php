<?php

namespace App\Repositories;

use Illuminate\Http\Request;

interface OrderRepositoryInterface
{
    /**
     * Get all orders
     * @method  GET api/orders
     * @access  public
     */
    public function getAllOrders();

    /**
     * Get Customer By orderNumber
     * @param   integer     $orderNumber
     * @method  GET api/orders/{orderNumber}
     * @access  public
     */
    public function getOrdersByOrderNumber($orderNumber);
}
