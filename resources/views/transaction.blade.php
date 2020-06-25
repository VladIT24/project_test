@extends('layouts.app')

@section('title-block')
    About
@endsection

@section('content')
    <h1>Add a transaction</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('transaction-form')}}" method="post">

        @csrf

        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="text" name="amount" placeholder="Type your amount" id="amount" class="form-control">
        </div>

        <div class="form-group">
            <label for="customerid">Customer ID</label>
            <input type="text" name="customerid" placeholder="Type customer id" id="customerid" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Send</button>

    </form>

@endsection
