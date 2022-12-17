<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\berita;
use App\Models\kompetisi;
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
            'tanggalPembukaan' => 'required',
            'tanggalPenutupan' => 'required',
            'gambar' => 'file|image|required',
            'linkPendaftaran' => ' required',

        ],[
            'required' => ':attribute wajib diisi'
        ]);
        if($validator->fails()){
            return redirect('/uploadNews')->withErrors($validator)->withInput();
        }else{
            $extFile = $request->gambar->getClientOriginalExtension();
            $namaFile = Auth::id().'beasiswa'.time().".".$extFile;
            $path = $request->gambar->storeAs('public',$namaFile);
            $publicPath = 'storage/'.$namaFile;
            DB::table('beritas')->insert([
                "judul" => $request->judul,
                "deskripsi" => $request->deskripsi,
                "kategoriBeasiswa" =>$request->kategoriBeasiswa,
                "tanggal"=>$request->tanggal,
                "tanggalPembukaan" => $request->tanggalPembukaan,
                "tanggalPenutupan" => $request->tanggalPenutupan,
                "tanggalPengumuman" => $request->tanggalPengumuman,
                "jenisBeasiswa"=>$request->jenisBeasiswa,
                "gambar"=>$publicPath,
                "region"=>$request->region,
                "linkPendaftaran"=>$request->linkPendaftaran,
                "id"=>Auth::id(),
                "created_at" => now(),
                "updated_at" => now(),
                "jenisBerita" => "beasiswa"
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
        $null = $berita->where('id','=',$id)->where('approve','')->sortByDesc('id_news');
        $approve = $berita->where('id','=',$id)->where('approve','1');
        $decline = $berita->where('id','=',$id)->where('approve','0');
        return view('dashboardUser',['profile'=>$profile,'user' => $user,'id'=>$id,'null'=>$null,'approve'=>$approve,'decline'=>$decline]);
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

    public function newsShow($id_news){
        $beritas = berita::all();
        $user = User::all();
        $news = berita::query();
        $now = now();

        $berita = $beritas->where('id_news','=',$id_news)->first();
        $urutan = $news->where('tanggalPembukaan','=', $now)->get();
        $uploader = $user->where('id','=',$berita->id)->first();
        $latest = $beritas->sortByDesc('id_news');
        if($berita->jenisBerita == 'beasiswa'){
            return view('news',['berita'=>$berita,'urutan'=>$urutan,'uploader'=>$uploader,'id_news'=>$id_news, 'latest'=>$latest]);
        }
        else{
            return view('newsKompetisi',['berita'=>$berita,'urutan'=>$urutan,'uploader'=>$uploader,'id_news'=>$id_news,'latest'=>$latest]);
        }

    }
    public function uploadNews(){
        return view('upload');
    }
    public function index(Request $request){
        $search = $request->search;

        $berita = new berita();
        $berita = $berita->where("approve","1");
        if(!empty($search)){
            $berita = $berita->where("judul","like","%".$search."%");
        }
        $berita = $berita->paginate(9);
        return view('index',['berita'=>$berita]);
    }
    public function uploadKompetisi(){
        return view('uploadKompetisi');
    }
    public function prosesUploadKompetisi(Request $request){
        $validator = validator::make($request->all(),[
            'judul' => 'required|min:3',
            'deskripsi' => 'required',
            'tanggalPembukaan' => 'required',
            'tanggalPenutupan' => 'required',
            'gambar' => 'file|image|required',
            'linkPendaftaran' => ' required',
        ],[
            'required' => ':attribute wajib diisi'
        ]);
        if($validator->fails()){
            return redirect('/uploadKompetisi')->withErrors($validator)->withInput();
        }else{
            $extFile = $request->gambar->getClientOriginalExtension();
            $namaFile = Auth::id().'kompetisi'.time().".".$extFile;
            $path = $request->gambar->storeAs('public',$namaFile);
            $publicPath = 'storage/'.$namaFile;
            DB::table('beritas')->insert([
                "judul" => $request->judul,
                "tingkatKompetisi" => $request->tingkatKompetisi,
                "tanggalPembukaan" => $request->tanggalPembukaan,
                "tanggalPenutupan" => $request->tanggalPenutupan,
                "tanggalPengumuman" => $request->tanggalPengumuman,
                "deskripsi" => $request->deskripsi,
                "tanggal"=> now(),
                "gambar"=>$publicPath,
                "linkPendaftaran"=>$request->linkPendaftaran,
                "id"=>Auth::id(),
                "created_at" => now(),
                "updated_at" => now(),
                "jenisBerita" => "Kompetisi"
            ]);
            return redirect('/');
            }
        }
    public function beasiswaS1(){
        $beasiswa = berita::all();
        $berita = $beasiswa->where('kategoriBeasiswa','s1')->where('approve','1');
        return view('listBeasiswaDanKompetisi',['berita' => $berita]);
    }
    public function beasiswaS2(){
        $beasiswa = berita::all();
        $berita = $beasiswa->where('kategoriBeasiswa','s2')->where('approve','1');
        return view('listBeasiswaDanKompetisi',['berita' => $berita]);
    }
    public function beasiswaS3(){
        $beasiswa = berita::all();
        $berita = $beasiswa->where('kategoriBeasiswa','s3')->where('approve','1');
        return view('listBeasiswaDanKompetisi',['berita' => $berita]);
    }
    public function luarNegeri(){
        $beasiswa = berita::all();
        $berita = $beasiswa->where('kategoriBeasiswa','Beasiswa Luar Negeri')->where('approve','1');
        return view('listBeasiswaDanKompetisi',['berita' => $berita]);
    }
    public function kompetisiUmum(){
        $beasiswa = berita::all();
        $berita = $beasiswa->where('tingkatKompetisi','umum')->where('approve','1');
        return view('listBeasiswaDanKompetisi',['berita' => $berita]);
    }
    public function kompetisiSMP(){
        $beasiswa = berita::all();
        $berita = $beasiswa->where('tingkatKompetisi','SMP')->where('approve','1');
        return view('listBeasiswaDanKompetisi',['berita' => $berita]);
    }
    public function kompetisiSMA(){
        $beasiswa = berita::all();
        $berita = $beasiswa->where('tingkatKompetisi','SMA')->where('approve','1');
        return view('listBeasiswaDanKompetisi',['berita' => $berita]);
    }
    public function kompetisiS1(){
        $beasiswa = berita::all();
        $berita = $beasiswa->where('tingkatKompetisi','S1')->where('approve','1');
        return view('listBeasiswaDanKompetisi',['berita' => $berita]);
    }
    public function updateBerita($id_news){
        $select = berita::all();
        $result = $select->where('id_news',$id_news)->first();
        if($result->jenisBerita == "beasiswa"){
            return view('updateBeasiswa',['update' => $result]);
        }else{
            return view('updateKompetisi',['update'=>$result]);
        }
    }
    public function prosesUpdateBerita($id_news, Request $request){
        $validator = validator::make($request->all(),[
            'judul' => 'required|min:3',
            'deskripsi' => 'required',
            'tanggalPembukaan' => 'required',
            'tanggalPenutupan' => 'required',
            'gambar' => 'file|image|required',
            'linkPendaftaran' => ' required',

        ],[
            'required' => ':attribute wajib diisi'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
        $extFile = $request->gambar->getClientOriginalExtension();
        $namaFile = Auth::id().'kompetisi'.time().".".$extFile;
        $path = $request->gambar->storeAs('public',$namaFile);
        $publicPath = 'storage/'.$namaFile;
        DB::table('beritas')->where('id_news',$id_news)->update([
                "judul" => $request->judul,
                "deskripsi" => $request->deskripsi,
                "kategoriBeasiswa" =>$request->kategoriBeasiswa,
                "jenisBeasiswa" => $request->jenisBeasiswa,
                "tanggalPembukaan" => $request->tanggalPembukaan,
                "tanggalPenutupan" => $request->tanggalPenutupan,
                "tanggal"=>now(),
                "gambar"=>$publicPath,
                "region"=>$request->region,
                "linkPendaftaran"=>$request->linkPendaftaran,
                "approve"=>''
        ]);
        return redirect('/dashboarduser');
    }
    }

    public function prosesUpdateKompetisi($id_news, Request $request){
        $validator = validator::make($request->all(),[
            'judul' => 'required|min:3',
            'deskripsi' => 'required',
            'tanggalPembukaan' => 'required',
            'tanggalPenutupan' => 'required',
            'gambar' => 'file|image|required',
            'linkPendaftaran' => ' required',
        ],[
            'required' => ':attribute wajib diisi'
        ]);
        if($validator->fails()){
            return redirect('/uploadKompetisi')->withErrors($validator)->withInput();
        }else{
            $extFile = $request->gambar->getClientOriginalExtension();
            $namaFile = Auth::id().'kompetisi'.time().".".$extFile;
            $path = $request->gambar->storeAs('public',$namaFile);
            $publicPath = 'storage/'.$namaFile;
            DB::table('beritas')->where('id_news',$id_news)->update([
                "judul" => $request->judul,
                "tingkatKompetisi" => $request->tingkatKompetisi,
                "tanggalPembukaan" => $request->tanggalPembukaan,
                "tanggalPenutupan" => $request->tanggalPenutupan,
                "tanggalPengumuman" => $request->tanggalPengumuman,
                "deskripsi" => $request->deskripsi,
                "tanggal"=> now(),
                "gambar"=>$publicPath,
                "linkPendaftaran"=>$request->linkPendaftaran,
                "id"=>Auth::id(),
                "created_at" => now(),
                "updated_at" => now(),
                "jenisBerita" => "Kompetisi"
            ]);
            return redirect('/dashboarduser');
            }
    }

    public function deleteNews($id_news){
        berita::where('id_news',$id_news)->first()->delete();
        return redirect()->back();
    }
};
