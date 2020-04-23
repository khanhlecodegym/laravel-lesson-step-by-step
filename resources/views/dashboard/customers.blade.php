@extends('layout')

@section('content')
    <h1>Customers</h1>

    <form action="customers" method="POST" class="pb-5">
        <div class="input-group">
            <input type="text" name="name">
            @error('name')
            <p class="text-warning">{{ $errors->first('name') }}</p>
            @enderror
            <button type="submit">Add Customer</button>

            @csrf
        </div>
    </form>

    <ul>
        @foreach ($customers as $customer)
            <li>{{ $customer->name }}</li>
        @endforeach
    </ul>
@endsection

