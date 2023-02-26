<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index (){
        // $customers = Customer::all();
        // echo "<pre>";
        // print_r($customers->toarray());
        return view('customer_registration');
        
    }
    public function store(Request $request){
        // echo "<pre>";
        // print_r($request->all());

        $customer = new Customer;
        $customer->customer_name =$request['customer_name'] ;
        $customer->customer_email = $request['customer_email'];
        $customer->customer_gender = $request['customer_gender'];
        $customer->customer_address = $request['customer_address'];
        $customer->customer_city = $request['customer_city'];
        $customer->customer_state = $request['customer_city'];
        $customer->customer_dob = $request['customer_dob'];
        $customer->customer_password = md5($request['customer_password']) ;
        $customer->save();
        return redirect('/customer/view');
    }
    public function view(){
        $customers = customer::all();
        // echo "<pre>";
        // print_r($customers);
        // print_r($customers->toArray());
        // die;
        $data = compact('customers');
        return view('view_customer')->with($data);
    }
}
