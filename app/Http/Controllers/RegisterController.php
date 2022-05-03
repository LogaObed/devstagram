<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }
    public function store(Request $request){
        
        // return dd($request);
        //validacion con laravel
        $this->validate($request,[
            'nombre'=>'required|min:4',
            'usuario'=>'required|min:4',
            'correo'=>'required|min:4',
            'password'=>'required|min:4',
            'passwrod_validate'=>'required|min:4',
        ]);
     }
}
