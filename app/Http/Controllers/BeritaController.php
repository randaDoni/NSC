<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\berita;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class BeritaController extends Controller
{
    public function uploadNews(Request $request){
        $validator = validator::make($request->all(),[
            'judul' => 'required|min:3',
            'deskripsi' => 'required',
            'tipeBeasiswa' => 'required',
            'tanggal' => 'required',
            'gambar' => 'file|image|required'
        ],[
            'required' => ':attribute wajib diisi'
        ]);
        if($validator->fails()){
            dd('salah');
            //return redirect('/upload')->withErrors($validator)->withInput();
        }else{
            $extFile = $request->gambar->getClientOriginalExtension();
            $namaFile = 'nsc-'.time().".".$extFile;
            $path = $request->gambar->storeAs('uploads',$namaFile);
            $publicPath = 'storage/'.$path;
            DB::table('beritas')->insert([
                "judul" => $request->judul,
                "deskripsi" => $request->deskripsi,
                "tipeBeasiswa" =>$request->tipeBeasiswa,
                "tanggal"=>$request->tanggal,
                "gambar"=>$publicPath,
                "created_at" => now(),
                "updated_at" => now()
            ]);
            return redirect('/');
        }
    }
    public function berita(){
        $berita = berita::all();
        $selected = $berita->where('deskripsi','=','defefefefe')->first();
        return view('news',['berita'=>$selected]) ;
    }
    public function dashboardUser(){
        $user = User::all();
        $id = Auth::id();
        $profile = $user->where('id','=',$id)->first();
        return view('dashboardUser',['profile'=>$profile,'user' => $user]);
    }
    public function dashboardUserShow($id){
        $user = User::all();
        $profile = User::where('id',$id)->first();
        return view('dashboardUser',['profile'=>$profile,'user' => $user]);
    }
    public function beritaUserShow($id){
        $result = berita::where('id',$id)->first();
        return view('post',[]);
    }
    public function uploadFotoProfil(Request $request){
            // $user = User::name
            // $extFile = $request->gambar->getClientOriginalExtension();
            // $namaFile = '-'.time().".".$extFile;
            // $path = $request->gambar->storeAs('uploads',$namaFile);
            // $publicPath = 'storage/'.$path;
            dd('masuk ga');
    }
}
