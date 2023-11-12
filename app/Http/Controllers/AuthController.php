<?php

// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

use function Ramsey\Uuid\v1;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function newRegister(Request $requestt)
    
{
    // $request->validate([
    //     'name' => 'required|string',
    //     'email' => 'required|email|unique:users',
    //     'password' => 'required|min:6',
    //     'nim' => 'required|numeric|unique:users',
    //     'no_hp' => 'required|numeric',
    //     'id_jurusan' => 'required|numeric',
    // ]);

    Mahasiswa::create([
        'name' => $requestt->name,
        'email' => $requestt->email,
        'nim' => $requestt->nim,
        'no_hp' => $requestt->no_hp,
        'id_jurusan' => $requestt->id_jurusan,
        'password' => bcrypt($requestt->password),
        'remember_token' => Str::random(60)
    ]);

    return redirect('/login');
}

public function login(){
    return view('login');
}

public function newLogin(Request $request)
{
    $request->validate([
        'email' => 'required|email:dns',
        'password' => 'required|min:6'
    ]);

    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return view('/alur');
    }

    return back()->with('loginError', 'Login failed!');
}}

?>

