<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index(){
        return view("index");
    }

    function login(Request $request){
        Session::flash('email', $request->email);
        $request->validate([
            'email'=> 'required',
            'password'=> 'required'
        ],[
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);

        $infologin = [
            'email' => $request->email,
            'password'=> $request->password,
        ];

        if(Auth::attempt($infologin)){
            // return 'sukses';
            return redirect('malang')->with('success', 'Berhasil');
        }else{
            // return 'gagal';
            return redirect('index')->withErrors('Email/Password tidak valid');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('index')->with('success', 'Berhasil logout');
    }

    function register(){
        return view("register");
    }

    function create(Request $request){
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|email|unique:users',
            'password'=> 'required|min:6'
        ],[
            'name.required' => 'Name wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Silahkan masukkan email yang valid',
            'email.unique' => 'Email sudah ada',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minimun 6 karakter'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' =>Hash::make($request->password)
        ];

        User::create($data);

        $infologin = [
            'email' => $request->email,
            'password'=> $request->password,
        ];

        if(Auth::attempt($infologin)){
            // return 'sukses';
            return redirect('index')->with('success', 'Registrasi berhasil. Selamat datang, '.Auth::user()->name.'!');
        }else{
            // return 'gagal';
            return redirect('index')->withErrors('Email/Password tidak valid');
        }
    }
}
