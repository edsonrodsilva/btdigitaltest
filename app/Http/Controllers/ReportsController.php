<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Repositories\CustomerRepositoryInterface;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    private $customerRepository;

    public function __construct(CustomerRepositoryInterface $customerRepository)
    {
        return $this->customerRepository = $customerRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCustomersCountry()
    {
        return $this->customerRepository->getCustomersCountry();
    }


}
