@extends('layouts.app')

@section('title', 'Contact CodeGym')

@section('content')

<h1>Contact CodeGym</h1>

@if (!session()->has('message'))
<form action="/contact" method="post">
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

    <div class="form-group">
        <label for="message">Message: </label>
        <textarea class="form-control" name="message" id="message" cols="30" rows="10">{{ old('message') }}</textarea>
        <p class="text-warning">{{ $errors->first('message') }}</p>
    </div>

    @csrf

    <button type="submit" class="btn btn-primary">Send Message</button>
</form>
@endif


@endsection
