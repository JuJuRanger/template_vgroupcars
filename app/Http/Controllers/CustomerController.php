<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        // $countRow = Customer::count(); // 20

        return $customers;

        /**
         * ####################################
         * return แบบโยนตัวเดียว single
         * ####################################
        */
        // return view('backend.pages.customers.index')->with('customer', $customer);

        /**
         * ####################################
         * return แบบหลายตัวแปร multi
         * ####################################
        */
        // return view('backend.pages.customers.index', [
        //     'customer' => $customer,
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'this is create';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return 'this is store';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return 'this is show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return 'this is edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        return 'this is update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        return 'this is destroy';
    }
}
