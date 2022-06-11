@extends('layouts.unauthorized')

@section('content')
    <div class="mt-8 ml-12">
        <div class="w-full max-w-xs">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="/register" method="POST">
                {{ @csrf_field() }}
                <h1 class="text-xl font-mono font-bold ml-4">Create your account </h1>

                <div class="mb-4 mt-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Name: </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        type="text" name="name" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <div>{{ $errors->first('name') }}</div>
                    @endif
                </div>

                <br>

                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Email: </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        type="email" name="email" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <div>{{ $errors->first('email') }}</div>
                    @endif
                </div>

                <br>

                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" s>Password: </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        type="password" name="password">
                    @if ($errors->has('password'))
                        <div>{{ $errors->first('password') }}</div>
                    @endif
                </div>

                <br>

                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Confirm Password: </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        type="password" name="confirm_password">
                    @if ($errors->has('confirm_password'))
                        <div>{{ $errors->first('confirm_password') }}</div>
                    @endif
                </div>

                <br>

                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">Register</button>
            </form>
        </div>
    </div>
@endsection
