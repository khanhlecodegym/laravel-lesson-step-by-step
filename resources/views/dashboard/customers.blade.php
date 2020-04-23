@extends('layout')

@section('title', 'Customers List')


@section('content')
<div class="row">
    <div class="col-12">
        <h1>Customer List</h1>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <form action="customers" method="POST">
            <div class="form-group">
                <label for="name">Name: </label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                <p class="text-warning">{{ $errors->first('name') }}</p>
            </div>
            <div class="form-group">
                <label for="email">Email: </label>
                <input type="text" name="email" value="{{ old('email') }}" class="form-control">
                <p class="text-warning">{{ $errors->first('email') }}</p>
            </div>
            <button type="submit" class="btn btn-primary">Add Customer</button>

             @csrf
        </form>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <ul>
            @foreach ($customers as $customer)
                <li>{{ $customer->name }} <span class="text-muted">({{ $customer->email }})</span></li>
            @endforeach
        </ul>
    </div>
</div>


@endsection

