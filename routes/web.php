<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\VerificationController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

;

Route::get('/news', function () {
    return view('news');
})->name('news');
Route::get('/',[CollectionController::class,'poto'])->name('index');

Route::post('/proses-form',[CustomAuthController::class,'customRegister']);
Route::post('/proses-login',[CollectionController::class,'prosesLogin']);


Route::get('/data_user',[CollectionController::class,'dataUser'])->name('user.data');
Route::get('/post',function(){
    return view('admin.post');
});
Route::get('/logout',function(){
    return view('admin.logout');
});
Route::get('/view',function(){
    return view('admin.view');
});
Route::get('/beasiswa',function(){
    return view('beasiswa');
})->name('beasiswa');
Route::get('/kompetisi',function(){
    return view('kompetisi');
});
Route::get('/dashboardadmin',function(){
    return view('admin.dashboard');
});
Route::delete('/data_user/userdelete/{users}',[CollectionController::class,'destroy'])->name('user.delete');

Route::get('/login',[AuthController::class,'get_login'])->name('login');
Route::get('/register',[AuthController::class,'get_register'])->name('register');
Route::post('/login',[AuthController::class,'post_login'])->name('post.login');
Route::post('/register',[AuthController::class,'post_register']);
Route::get('/email/verify/need-verification',[VerificationController::class,'notice'])->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}',[VerificationController::class,'verify'])->middleware('auth','signed')->name('verification.verify');
Route::middleware((['auth','auth.session','verified']))->group(function(){
    Route::get('/dashboarduser',[BeritaController::class,'dashboardUser'])->name('dashboard.user');
    Route::get('/dashboarduser/{id}',[BeritaController::class,'dashboardUserShow'])->name('dashboard.user.show');
    Route::get('/test/{id}',[AuthController::class,'test']);
    Route::get('/logout',[AuthController::class,'logout']);
    Route::get('/dashboarduser/{id}/upload_foto_profil',[BeritaController::class,'uploadFotoProfil'])->name('upload.foto.profil');
    Route::get('/uploadNews',[BeritaController::class,'uploadNews'])->name('upload.news');
    Route::post('/prosesUploadNews',[BeritaController::class,'prosesUploadNews'])->name('proses.upload.news');
    Route::get('/uploadKompetisi',[BeritaController::class,'uploadKompetisi'])->name('upload.kompetisi');
    Route::post('/prosesUploadKompetisi',[BeritaController::class,'prosesUploadKompetisi'])->name('proses.upload.kompetisi');
});
Route::get('/beasiswaS1',[BeritaController::class,'beasiswaS1'])->name('beasiswa.s1');
Route::get('/beasiswaS2',[BeritaController::class,'beasiswaS2'])->name('beasiswa.s2');
Route::get('/beasiswaS3',[BeritaController::class,'beasiswaS3'])->name('beasiswa.s3');
Route::get('/luarNegeri',[BeritaController::class,'luarNegeri'])->name('luar.negeri');
Route::get('/kompetisiUmum',[BeritaController::class,'kompetisiUmum'])->name('kompetisi.umum');
Route::get('/kompetisiSMP',[BeritaController::class,'kompetisiSMP'])->name('kompetisi.SMP');
Route::get('/kompetisiSMA',[BeritaController::class,'kompetisiSMA'])->name('kompetisi.SMA');
Route::get('/kompetisiS1',[BeritaController::class,'kompetisiS1'])->name('kompetisi.S1');
Route::get('/news/{id_news}',[BeritaController::class,'newsShow'])->name('news.show');
Route::get('/',[BeritaController::class,'index'])->name('home');

Route::controller(AdminController::class)->group(function(){
    Route::get('/post','adminPost');
    Route::post('/beritaAccept/beritasupdate/{beritas}','beritaAccept')->name('berita.accept');
    Route::post('/beritaDecline/beritasdecline/{beritas}','beritaDecline')->name('berita.decline');
});
