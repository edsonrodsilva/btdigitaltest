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
     * Returns a pageable list of all customer's orders. The default page size is 10.
     * @param $customerNumber
     * @return collection
     */
    public function getAllOrdersByCustomer($customerNumber) {
        try {
            $orders = Order::where('customerNumber', $customerNumber)->paginate(10);

            //Check the order exits
            if (!$orders) return $this->error("No order with customer $customerNumber", 204);

            return $this->success("Orders of customer", $orders, 200);

        } catch (Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }


}
