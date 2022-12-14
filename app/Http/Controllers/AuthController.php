<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Monolog\Registry;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function get_login(){
        return view('login');
    }
    public function get_register(){
        return view('register');
    }
    public function post_login(Request $request){

        $credentials = $request->only('email','password');
        if (Auth::attempt($credentials)) {
            if(!Auth::user()->hasRole([
                User::ROLE_USER,
                User::ROLE_ADMINISTRATOR,
            ])){
                Auth::logout();
                return redirect('/login');
            }
            $request->session()->regenerate();
            return redirect()->intended();
        }else {
            return redirect('/login')->with(['warning' => 'Username atau Password salah']);
        }
    }
    public function post_register(Request $request){
        $validator = validator::make($request->all(),[
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|size:8',
            'password_confirmation' => 'required_with:password|same:password|size:8'
        ],[
            'required' => ':attribute wajib diisi',
            'same' => 'konfirmasi password salah',
            'size' => ':attribute harus berukuran :size karakter',
            'max' => ':attribute maksimal berisi :max karakter',
            'min' => ':attribute minimal berisi :min karakter',

        ]);
        if($validator->fails()){
            return redirect('/register')->withErrors($validator)->withInput();
        }else{
            // $hash = bcrypt($request->password);
            // DB::table('users')->insert([
            //     "name" => $request->name,
            //     "email" => $request->email,
            //     "password" =>$hash,
            //     "created_at" => now(),
            //     "updated_at" => now()
            // ]);
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'password' =>bcrypt($request->password)
            ];
            $user = User::create($data);
            $user->assignRole(User::ROLE_USER);
            event(new Registered($user));
            auth()->login($user);
            return redirect()->route('verification.notice')->with('succes','Akun berhasil dibuat','silahkan verfikasi Email anda');

        }
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
