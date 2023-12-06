<?php

// app/Http/Controllers/AgenciaController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agencia;
use Illuminate\Support\Facades\Auth;

class AgenciaController extends Controller
{


    public function login()
    {
        return view('auth.login');
    }

    public function loginAction(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        }

        return redirect('login')->withErrors('email', 'Error de autenticación. Verifica tus credenciales.');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }


    public function index()
    {
        $agencias = Agencia::all();
        return view('agencias.index', compact('agencias'));
    }

    //spanish for visual

    public function create()
    {
        return view('agencias.create');
    }

    public function store(Request $request)
    {
        Agencia::create($request->all());
        return redirect()->route('agencias.index');
    }

    public function edit($id)
    {
        $agencia = Agencia::find($id);
        return view('agencias.edit', compact('agencia'));
    }

    public function update(Request $request, $id)
    {
        $agencia = Agencia::find($id);
        $agencia->update($request->all());
        return redirect()->route('agencias.index');
    }

    public function destroy($id)
    {
        Agencia::destroy($id);
        return redirect()->route('agencias.index');
    }
}

