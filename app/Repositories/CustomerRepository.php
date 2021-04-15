<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Repositories\CustomerRepositoryInterface;
use App\Models\Customer;
use App\Services\CapitalCountryService;
use App\Traits\ResponseApiTrait;
use Exception;

class CustomerRepository implements CustomerRepositoryInterface
{
    private $capitalCountryService;

    public function __construct(CapitalCountryService $capitalCountryService)
    {
        $this->capitalCountryService = $capitalCountryService;
    }


    //Use ResponseApiTrait Trai in this repository
    use ResponseApiTrait;

    public function getAllCustomers()
    {
        try {
            $customers = Customer::paginate(10);
            return $this->success('All Customers', $customers);
        } catch (Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function getCustomerByCustomerNumber($customerNumber)
    {
        try {
            $customer = Customer::find($customerNumber);

            //Check the customer
            if (!$customer) return $this->error("No customer with customerNumber $customerNumber", 204);

            //if has employer, show
            $customer->employer ? $customer->employer : $customer;

            return $this->success("Customer retrieve", $customer);
        } catch (Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function deleteCustomer($customerNumber)
    {
        try {
            $customer = Customer::find($customerNumber);

            // Check the user
            if (!$customer) return $this->error("No customers with customerNumber $customerNumber", 204);

            $customer->delete();

            return $this->success('Customer deleted', $customer);
        } catch (Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

     /**
     * Returns a pageable list of all customer's orders. The default page size is 10.
     * @param $customerNumber
     * @return collection
     */
    public function getAllOrdersByCustomerNumber($customerNumber) {
        try {
            $customer = Customer::find($customerNumber);

            //Check the order exits
            if (!$customer) return $this->error("Customer with customerNumber: $customerNumber not exists", 204);

            $ordersCustomer = $customer->orders()->with('orderDetails')->paginate(10);

            return $this->success("Orders of customer", $ordersCustomer, 200);

        } catch (Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }


    /**
     * Returns a pageable list of all customer's orders. The default page size is 10.
     * @param $customerNumber
     * @return collection
     */
    public function getCustomersCountry() {
        try {
            $customers = Customer::all();

            //Check the order exits
            if (!$customers) return $this->error("Customers is not exists", 204);

            $dataCountries = [];

            //group countries
            $customersCountry = $customers->groupBy('country');

            foreach($customersCountry as $country => $countries) {
                array_push($dataCountries, [
                    'country' => $country,
                    'capital' => $this->capitalCountryService->execute($country),
                    'quantity' => $countries->count()
                ]);
            }

            return $this->success("Customer number for each country", $dataCountries, 200);

        } catch (Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }
}
