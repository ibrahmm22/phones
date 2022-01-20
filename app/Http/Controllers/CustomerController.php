<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Repositories\CustomerRepository;
use App\Services\CustomerService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

/**
 * Class CustomerController
 * @package App\Http\Controllers
 */
class CustomerController extends Controller
{
    /**
     * @var CustomerService
     */
    private $customerService;

    public function __construct()
    {
        $this->customerService = new CustomerService(new CustomerRepository());
    }

    /**
     * @param CustomerRequest $request
     * @return Application|Factory|View
     */
    public function getPhones(CustomerRequest $request)
    {
        $phones = $this->customerService->getPhones();

        $parsedPhones = $this->customerService->extract($phones);

        if ($request->has('country', 'state')) {
            $filters = $request->all();
            $parsedPhones = $this->customerService->filter($parsedPhones, $filters);
        }

        return view('customer_phones', ['result' => $parsedPhones]);
    }
}
