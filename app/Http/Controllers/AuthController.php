<?php

// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function newRegister(Request $request)
    
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
        'name' => $request->name,
        'email' => $request->email,
        'nim' => $request->nim,
        'no_hp' => $request->no_hp,
        'id_jurusan' => $request->id_jurusan,
        'password' => $request->password,
        'remember_token' => Str::random(60)
    ]);

    return redirect()->route('login');
}


    public function login()
    {
        return view('login');
    }

    public function newLogin(Request $request)
{
    try {
        $user = Mahasiswa::where('email', $request->email)->first();

        if (!$user) {
            dd('User not found');
            return redirect()->route('login')->with('fail', 'User not found!');
        }
        dd('failed to login', 'Stored Password:', $user->password, 'Entered Password:', $request->password);

        // Continue with your existing logic...
    } catch (\Exception $e) {
        dd($e->getMessage());
        return redirect()->route('login')->with('fail', 'An error occurred during login.');
    }
}





}

    

