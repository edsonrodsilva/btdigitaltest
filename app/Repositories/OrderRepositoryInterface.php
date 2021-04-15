<?php

namespace App\Repositories;

use Illuminate\Http\Request;

interface OrderRepositoryInterface
{
    /**
     * Returns a pageable list of all customer's orders. The default page size is 10.
     * @method  GET api/customers/{customer_id}/orders
     * @access  public
     */
    public function getAllOrdersByCustomer($customerNumber);
}
