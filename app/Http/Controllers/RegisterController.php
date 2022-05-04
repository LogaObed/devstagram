<?php

namespace App\Http\Controllers;

use auth;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        // return dd($request);
        //validacion con laravel
        $this->validate($request, [
            'name' => 'required|min:4|max:25',
            'usuario' => 'required|unique:users|min:4|max:25',
            'email' => 'required|unique:users|min:8|max:25',
            // unique:nombredelatabla
            'password' => 'required|confirmed|min:8|max:25',
        ]);
        // dd($request);
        // registar usuario
        User::create([
            'name'=> $request->name,
            // Str::slug() guarda los datos para una url
            'usuario'=> Str::slug($request->usuario),
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
        ]);
        // autenticar un usuario con auth
        auth()->attempt($request->only('email','password'));

        return redirect()->route('post.index');
    }
}
