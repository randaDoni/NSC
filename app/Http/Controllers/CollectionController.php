<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Auth;

class CollectionController extends Controller
{
        public function index(){
            return view('index');
        }
        public function register(){
            return view('register');
        }
        public function poto(){
            $siswa0 = new \stdClass();
            $siswa0->namaFile = "siswa1.jpg" ;
            $siswa1 = new \stdClass();
            $siswa1->namaFile = "siswa2.jpeg";
            $siswa2 = new \stdClass();
            $siswa2->namaFile = "siswa3.jpeg";
            $siswa3 = new \stdClass();
            $siswa3->namaFile = "siswa3.jpeg";
            $siswa4 = new \stdClass();
            $siswa4->namaFile = "siswa3.jpeg";
            $siswa5 = new \stdClass();
            $siswa5->namaFile = "siswa3.jpeg";

            $siswas = collect([
                0 =>$siswa0,
                1 =>$siswa1,
                2 =>$siswa2,
                3 =>$siswa3,
                4 =>$siswa4
            ]);
            echo "register berhasil";
            return view('index',['siswas'=> $siswas]);
        }
        public function prosesLogin(Request $request){
            //belum menggunakan auth
            $verif = DB::table('users')
                                ->where(['email'=> ($request->email),'password'=> ($request->password)])
                                ->get()
                                ->count();

            if($verif > 0 ){
                return redirect('/');
            }else{
                return redirect('/login');
            }
        }
        public function dataUser(){
            $user = User::all();
            return view('admin.data_user',['user'=>$user]);
        }
        public function destroy($users,Request $request){
            User::where('id',$users)->first()->delete();
            return redirect()->back();
        }
        public function upload(){
            return view('upload');
        }
        public function editUser(){
            return view('edituser');
        }
        public function updateUser(Request $request){
            $validator = validator::make($request->all(),[
                'name' => 'required|min:3',
                'email' => 'required|email|unique:users,email,'.Auth::user()->id,
                'foto_profile' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                'password' => 'confirmed'
            ],[
                'required' => ':attribute wajib diisi'
            ]);

            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $name = $request->name;
            $email = $request->email;
            $password = $request->password;
            $foto_profile = $request->file("foto_profile");

            $result = Auth::user();

            if(!empty($password)){
                $password = bcrypt($password);
            }
            else{
                $password = $result->password;
            }

            if(!empty($foto_profile)){
                $extFile = $foto_profile->getClientOriginalExtension();
                $namaFile = Auth::id().'profile'.time().".".$extFile;
                $path = $foto_profile->storeAs('public',$namaFile);
                $publicPath = 'storage/'.$namaFile;
                $foto_profile = $publicPath;
            }

            $result->update([
                'name' => $name,
                'email' => $email,
                'password' => $password,
                'foto_profile' => $foto_profile,
            ]);

            return redirect()->back();
        }
    }
