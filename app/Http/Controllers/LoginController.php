<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * login the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function authenticating(Request $request)
    {
        $credentials = $request->only('username', 'password');
        $remember = $request->has('remember'); // Check if "remember" checkbox is checked

        if (Auth::attempt($credentials, $remember)) {
            // Jika autentikasi berhasil
            $user = Auth::user();

            if ($user->role == 'Admin') {
                // dd('Login Sebagai Admin');
                return redirect()->route('admin'); // Ganti dengan rute dashboard admin
                // return redirect()->intended('/');
            } elseif ($user->role == 'Teacher') {
                // dd('Login Sebagai Teacher');
                return redirect()->route('teacher'); // Ganti dengan rute dashboard guru
                // return redirect()->intended('/');
            } elseif ($user->role == 'Student') {
                // dd('Login Sebagai Student');
                return redirect()->route('student'); // Ganti dengan rute dashboard siswa
                // return redirect()->intended('/');
            }
        }

        // Jika autentikasi gagal
        // FacadesSession::flash('status', 'failed');
        return back()->withErrors(['username' => 'Username or password is incorrect']);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
