@extends('layouts.authorized')

@section('data')
    <h1 class="ml-4 mt-10 text-4xl font-bold">Users</h1>
    @foreach ($users as $user)
        <div class="ml-8 mt-4">
            <li>
                <a class="hover:text-blue-400 hover:underline"
                    href="/user/details/{{ $user->id }}">{{ $user->name }}</a>
            </li>
        </div>
    @endforeach

    <a href="/users">
        <button>Show All</button>
    </a>
@endsection
