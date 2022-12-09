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
    public function prosesUploadNews(Request $request){
        $validator = validator::make($request->all(),[
            'judul' => 'required|min:3',
            'deskripsi' => 'required',
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
            $namaFile = Auth::id().time().".".$extFile;
            $path = $request->gambar->storeAs('public',$namaFile);
            $publicPath = 'storage/'.$namaFile;
            DB::table('beritas')->insert([
                "judul" => $request->judul,
                "deskripsi" => $request->deskripsi,
                "kategoriBeasiswa" =>$request->kategoriBeasiswa,
                "tanggal"=>$request->tanggal,
                "gambar"=>$publicPath,
                "region"=>$request->region,
                "linkPendaftaran"=>$request->linkPendaftaran,
                "id"=>Auth::id(),
                "caption"=>$request->caption,
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
        $berita = berita::all();
        $profile = $user->where('id','=',$id)->first();
        $beritas = $berita->where('id','=',$id);
        return view('dashboardUser',['profile'=>$profile,'user' => $user,'id'=>$id,'beritas'=>$beritas]);
    }
    public function dashboardUserShow($id){
        $user = User::all();
        $profile = User::where('id',$id)->first();
        return view('dashboarduser',['profile'=>$profile,'user' => $user,'id'=>$id]);
    }
    public function beritaUserShow($id){
        $result = berita::where('id_news',$id)->first();
        return view('post',[]);
    }
    public function uploadFotoProfil(Request $request, $id){
        $profile = User::where('id',$id)->first();
        // $extFile = $request->gambar->getClientOriginalExtension();
        // $namaFile = 'nsc-'.time().".".$extFile;
        // $path = $request->gambar->storeAs('uploads',$namaFile);
        // $publicPath = 'storage/'.$path;
        dd($id);
    }

    public function newsShow($id_news){
        $beritas = berita::all();
        $user = User::all();
        $news = berita::query();
        $now = now();

        $berita = $beritas->where('id_news','=',$id_news)->first();
        $urutan = $news->where('tanggalPembukaan','=', $now)->get();
        $uploader = $user->where('id','=',$berita->id)->first();
        return view('news',['berita'=>$berita,'urutan'=>$urutan,'uploader'=>$uploader,'id_news'=>$id_news]);
    }
    public function uploadNews(){
        return view('upload');
    }
    public function index(){
        $berita = berita::all();
        return view('index',['berita'=>$berita]);
    }
}
