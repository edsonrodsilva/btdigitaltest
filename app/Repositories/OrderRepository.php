<?php

namespace App\Repositories;

use App\Repositories\OrderRepositoryInterface;
use App\Models\Order;
use App\Traits\ResponseApiTrait;
use Exception;

class OrderRepository implements OrderRepositoryInterface
{
    //Use ResponseApiTrait
    use ResponseApiTrait;

    /**
     * Get all orders
     * @method  GET api/orders
     * @access  public
     * @throws \Exception
     */
    public function getAllOrders(){
        try {
            $orders = Order::paginate(10);

            return $this->success('All Orders', $orders, 200);
        } catch (Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Get Order By orderNumber
     * @param   integer     $orderNumber
     * @method  GET api/orders/{orderNumber}
     * @access  public
     */
    public function getOrdersByOrderNumber($orderNumber) {
        try {
            $order = Order::find($orderNumber);

            //Check the order
            if (!$order) return $this->error("No order with orderNumber $orderNumber", 204);

            return $this->success("Order detail", $order, 200);
        } catch (Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }


}
