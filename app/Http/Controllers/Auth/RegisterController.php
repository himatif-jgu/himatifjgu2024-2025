<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    public function showRegistrationForm()
    {
        // Ambil data pengguna yang disimpan dalam session
        $socialUser = session('social_user');
        if (!$socialUser) {
            return redirect('/'); // Redirect jika tidak ada data pengguna dalam session
        }

        return view('auth.register', ['socialUser' => $socialUser]);
    }

    // Ubah metode create agar menggunakan data pengguna yang disimpan dalam session
    protected function create(array $data)
    {
        // Ambil data pengguna yang disimpan dalam session
        $socialUser = session('social_user');

        $userData = [
            'name' => $socialUser['name'],
            'email' => $socialUser['email'],
            'password' => Hash::make($data['password']),
            'google_id' => $socialUser['id'], // Masukkan google_id ke dalam tabel users
        ];

        // Pastikan token dan refresh token ada sebelum menyimpannya
        if (isset($socialUser['token'])) {
            $userData['google_token'] = $socialUser['token'];
        } else {
            // Jika tidak ada token, Anda dapat menetapkan nilai default atau menangani kasus ini sesuai kebutuhan Anda
            // Misalnya, jika tidak ada token, Anda dapat menetapkan nilai kosong
            $userData['google_token'] = '';
        }

        if (isset($socialUser['refreshToken'])) {
            $userData['google_refresh_token'] = $socialUser['refreshToken'];
        } else {
            // Sama seperti sebelumnya, jika tidak ada refreshToken, Anda dapat menetapkan nilai default atau menangani kasus ini sesuai kebutuhan Anda
            $userData['google_refresh_token'] = '';
        }

        return User::create($userData);
    }
}
