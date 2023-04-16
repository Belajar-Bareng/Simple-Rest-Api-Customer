<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Pagination\Cursor;

class CustomerController extends Controller
{

    private $customers;

    public function __construct()
    {
        $this->customers = Customer::factory()->count(5)->make();
    }

    /**
     * [GET] /api/customers
     */
    public function index()
    {
        return response()->json([
            'status' => true,
            'message' => 'OK',
            'data' => $this->customers,
        ]);
    }

    /**
     * [POST] /api/customers
     */
    public function store(Request $request)
    {
        $customer = new Customer();

        $customer->id = rand();
        $customer->name = $request->name;
        $customer->phone = $request->phone;

        $this->customers->append($customer->toArray());

        return response()->json([
            'status' => true,
            'message' => 'OK',
            'data' => $customer,
        ], 201);
    }

    /**
     * [GET] /api/customers/{id}
     */
    public function show($customer)
    {
        return response()->json([
            'status' => true,
            'message' => 'OK',
            'data' => $this->customers[0],
        ]);
    }

    /**
     * [PUT] /api/customers/{id}
     */
    public function update(Request $request, $customer)
    {

        $customer = new Customer();

        $customer->id = rand();
        $customer->name = $request->name;
        $customer->phone = $request->phone;

        return response()->json([
            'status' => true,
            'message' => 'OK',
            'data' => $customer,
        ], 200);

    }

    /**
     * [DELETE] /api/customers/{id}
     */
    public function destroy($customer)
    {

        return response()->json([
            'status' => true,
            'message' => 'OK',
        ], 204);
    }
}
