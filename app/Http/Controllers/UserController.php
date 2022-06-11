<?php

namespace App\Http\Controllers;

use App\Models\NewUser;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = NewUser::all();

        return view('dashboard', [
            'users' => $users
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|regex:/^[a-zA-Z]+$/u',
            'email' => 'required|email',
            'password' => [
                'required',
                'min:8',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/'
            ],
            'confirm_password' => 'required|min:8|same:password'
        ]);

        $newUser = new NewUser();
        $newUser->name = $request->name;
        $newUser->email = $request->email;
        $newUser->password = Hash::make($request->password);
        $newUser->save();

        return redirect('/');
    }

    public function show($user)
    {
        $user = NewUser::find($user);
        return view('show', [
            'user' => $user
        ]);
        // dd($id);
    }

    public function login()
    {
        return view('login');
    }

    public function authorized_user(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $user = NewUser::where('email', '=', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                if ($user->type == 'Admin') {
                    return redirect('dashboard');
                } else {
                    return redirect()->route('customer-view');
                }
            } else {
                return "Invalid password";
            }
        } else {
            return "Account not found!";
        }
    }

    public function show_all_users()
    {
        $users = NewUser::all();

        return view('users', [
            'users' => $users
        ]);
    }
}
