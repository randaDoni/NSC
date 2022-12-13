<?php

namespace App\Http\Controllers;

use App\Models\berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function adminPost(){
        $approve = berita::all();
        $berita = $approve->where('approve','');
        return view('admin.post',['berita' => $berita]);
    }
    public function beritaAccept($beritas){
        DB::table('beritas')
                ->where('id_news', $beritas)
                ->update(['approve' => '1']);
        return redirect()->back();
    }
    public function beritaDecline($beritas){
        DB::table('beritas')
                ->where('id_news', $beritas)
                ->update(['approve' => '0']);
        return redirect()->back();
    }
}
