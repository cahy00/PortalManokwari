<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index()
    {
        return inertia('Auth/Register');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'name'      => 'required',
        //     'email'     => 'required',
        //     'password'  => 'required|confirmed'
        // ]);

        // $user = new User();
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = $request->password;
        // $user->save();

        // return redirect()->route('login');

        $validate = $request->validate([
            'name' => 'required|max:30',
            'email' => 'required|unique:users|email|email:dns',
            'password' => 'required|confirmed|min:8',
        ]);

        // $validator = Validator::make($validate, $va)

        $validate['password'] = Hash::make($request->password);
        $user = User::create($validate);

        return redirect()->route('login');
    }
}
