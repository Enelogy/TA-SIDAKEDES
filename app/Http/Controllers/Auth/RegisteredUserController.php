<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\kk;
use App\Models\penduduk;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $penduduk = penduduk::all();
        return view('auth.register', compact('penduduk'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $penduduk = penduduk::where('id', $request->id)->get()->first();

        $user = User::create([
            'id' => $request->id,
            'name' => $penduduk->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => '2',
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->intended('penduduk/dashboard');
    }
}
