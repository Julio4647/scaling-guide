<?php

// app/Http/Controllers/Auth/RegisterController.php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Agencia;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Illuminate\Validation\Rule;


class RegisterController extends Controller
{


    public function create(Request $request)
    {

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ])->assignRole($request->input('role'));


        $agencias = Agencia::all();


        return view('agencias.index', compact('agencias'));
    }

    public function register()
    {
        return view('auth.register');
    }
}

