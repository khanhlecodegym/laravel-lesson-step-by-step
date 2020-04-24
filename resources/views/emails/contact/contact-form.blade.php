@component('mail::message')

#Thanks you for contact CodeGym

<strong>Name: </strong> {{ $data['name'] }}

<strong>Email: </strong> {{ $data['email'] }}

<strong>Message: </strong>

{{ $data['message'] }}


@endcomponent
