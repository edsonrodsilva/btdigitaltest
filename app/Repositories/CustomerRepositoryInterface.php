<?php

namespace App\Repositories;

use Illuminate\Http\Request;

interface CustomerRepositoryInterface
{
    /**
     * Get all customers
     * @method  GET api/customers
     * @access  public
     */
    public function getAllCustomers();

    /**
     * Get Customer By customerNumber
     * @param   integer     $customerNumber
     * @method  GET api/customers/{customerNumber}
     * @access  public
     */
    public function getCustomerByCustomerNumber($customerNumber);

    /**
     * Delete client
     * @param   integer     $customerNumber
     * @method  DELETE  api/customers/{customerNumber}
     * @access  public
     */
    public function deleteCustomer($customerNumber);

    /**
     * Get all orders by customerNumber
     * @param   integer     $customerNumber
     * @method  GET api/customers/{customerNumber}
     * @access  public
     */
    public function getAllOrdersByCustomerNumber($customerNumber);


    /**
     * Get customers country
     * @method  GET api/customers/country
     * @access  public
     */
    public function getCustomersCountry();
}
