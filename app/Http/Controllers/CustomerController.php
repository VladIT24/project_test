<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function submit(CustomerRequest $req)
    {
        $customer = new Customer();

        $customer->name = $req->input('name');
        $customer->cnp = $req->input('cnp');

        $customer->save();
        #return redirect()->route('home');

        return Request::all();

    }


}
