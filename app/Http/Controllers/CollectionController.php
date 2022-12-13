<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\User;
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
    }
