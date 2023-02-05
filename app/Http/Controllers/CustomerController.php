<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    // public function addCustomer()
    // {
    //     return view('backend.customer.add_customer');
    //    }
    //    public function customerNew(Request $request){
    //     $customer = new Customer();
    //     //    dd($request);
    //         $customer->name =$request->name;
    //         $customer->status =$request->status;
    //         $customer->select_distric =$request->select_distric;
    //         $customer->code =$request->code;
    //         $customer->save();
    //         return back();
    // }

    public function addCustomer()
    {
        return view('backend.customer.add_customer');
    }

    public function store(Request $request)
    {
        $customer = new Customer();
            //    dd($request);
                $customer->name =$request->name;
                $customer->status =$request->status;
                $customer->select_distric =$request->district;
                $customer->code =$request->code;
                $customer->save();
                return back();

    }

    public function customerList()
    {

      $c_list = Customer::all();

       return view('backend.customer.customer_list',compact('c_list'));
    }
}
