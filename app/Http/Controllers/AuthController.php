<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function Show_auth_form() {
        return view('auth_form');
    }
    public function Auth_Process(Request $request) {
        $data = $request->validate([
            'login' => ['required'],
            'password' => ['required']
        ]);
        $pass = DB::table('users')->where('login', $data['login'])->value('password');
        if ($pass === $data['password']) {
            setcookie('auth', $data['login'], time()+3600**90);
            return redirect(route('main_user_str'));
        }
    }
    public function Show_register_form() {
        return view('register_form');
    }
 }
