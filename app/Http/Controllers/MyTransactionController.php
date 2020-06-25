<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MyTransactionRequest;
use App\Models\MyTransaction;

class MyTransactionController extends Controller
{
    public function submit(MyTransactionRequest $rq){

        $mytransaction = new MyTransaction();

        $mytransaction->amount = $rq->input('amount');
        $mytransaction->customerid = $rq->input('cutomerid');

        $mytransaction->save();
        return redirect('home');

    }
}
