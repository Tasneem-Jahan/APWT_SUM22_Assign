@extends('layouts.unauthorized')

@section('content')
    <div class="w-full max-w-xs mt-10 ml-12">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="/check" method="POST">
            {{ csrf_field() }}
            <div class="mb-4">
                <div>
                    <label class="block text-gray-500 font-bold pr-4">Email</label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        type="email" name="email" placeholder="your@email.com">
                    @if ($errors->has('email'))
                        <div>{{ $errors->first('email') }}</div>
                    @endif
                </div>
                <div class="mt-6">
                    <label class="block text-gray-500 font-bold pr-4">Password</label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        type="password" name="password" placeholder="*********">
                    @if ($errors->has('password'))
                        <div>{{ $errors->first('password') }}</div>
                    @endif
                </div>

                <br>

                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-4"
                    type="submit">Login</button>
            </div>
        </form>
    </div>
@endsection
