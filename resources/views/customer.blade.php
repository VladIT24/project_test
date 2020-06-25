@extends('layouts.app')

@section('title-block')
    Customer
@endsection

@section('content')
    <h1>Add a customer</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('customer-form')}}" method="post">

        @csrf

        <div class="form-group">
            <label for="name">Your name</label>
            <input type="text" name="name" placeholder="Type your name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="cnp">Your cnp</label>
            <input type="text" name="cnp" placeholder="Type your cnp" id="cnp" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Send</button>

    </form>

@endsection


