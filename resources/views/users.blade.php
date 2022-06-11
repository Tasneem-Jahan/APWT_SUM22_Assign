@extends('layouts.authorized')

@section('data')
    @foreach ($users as $user)
        <div class="ml-8 mt-4">
            <li>
                {{ $user->name }}
                {{ $user->email }}
            </li>
        </div>
    @endforeach
@endsection
