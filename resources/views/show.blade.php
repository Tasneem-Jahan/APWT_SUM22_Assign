@extends('layouts.authorized')

@section('data')
    <div class="row">
        <div class="col-12">
            <h1 class="ml-4 mt-10 text-4xl font-bold">Details for {{ $user->name }}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-lg ml-4 mt-4">
            <p><strong>Name: </strong>{{ $user->name }}</p>
            <p><strong>Email: </strong>{{ $user->email }}</p>
        </div>
    </div>
@endsection
