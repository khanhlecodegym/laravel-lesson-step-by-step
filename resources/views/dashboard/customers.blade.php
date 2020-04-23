@extends('layout')

@section('content')
    <h1>Customers</h1>

    <form action="customers" method="POST" class="pb-5">
        <div class="input-group">
            <input type="text" name="name" value="{{ old('name') }}">
            <p class="text-warning">{{ $errors->first('name') }}</p>
        </div>
        <div class="input-group">
            <input type="text" name="email" value="{{ old('email') }}">
            <p class="text-warning">{{ $errors->first('email') }}</p>
        </div>
        <button type="submit">Add Customer</button>

         @csrf
    </form>

    <ul>
        @foreach ($customers as $customer)
            <li>{{ $customer->name }} <span class="text-muted">({{ $customer->email }})</span></li>
        @endforeach
    </ul>
@endsection

