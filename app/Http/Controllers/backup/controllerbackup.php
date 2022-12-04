<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class CustomAuthController extends Controller
{
        public function customLogin(Request $request){
          $verif = DB::table('users')
                                    ->where(['email'=> ($request->email),'password'=> ($request->password)])
                                    ->get()
                                    ->count();
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return view('admin.dashboard');
        }
        return redirect('login')->withSuccess('Login details are not valid');
        }

        public function customRegister(Request $request){
            $validator = validator::make($request->all(),[
                'name' => 'required|min:3|max:50',
                'email' => 'required|email',
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
                $hash = bcrypt($request->password);
                DB::table('users')->insert([
                    "name" => $request->name,
                    "email" => $request->email,
                    "password" =>$hash,
                    "created_at" => now(),
                    "updated_at" => now()
                ]);
                return redirect('/');
            }
        }
        public function dashboard(){
            if(Auth::check()){
                return view('admin.dashboard');
            }
            return redirect("login")->withSuccess('You are not allowed to access');
        }
        public function signOut(){
            Session::flush();
            Auth::logout();
        }
}
