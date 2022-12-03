<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\BeritaController;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register',function(){
    return view('register');
});
Route::get('/post',function(){
    return view('post');
});
Route::get('/',[CollectionController::class,'poto']);
Route::get('/news',function(){
    return view('news');
});
Route::post('/proses-form',[CustomAuthController::class,'customRegister']);
Route::post('/proses-login',[CollectionController::class,'prosesLogin']);

Route::get('/dsbadmin',function(){
    return view('admin.dashboard');
});
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
});
Route::get('/kompetisi',function(){
    return view('kompetisi');
});
Route::delete('/data_user/userdelete/{users}',[CollectionController::class,'destroy'])->name('user.delete');

Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('upload',[CollectionController::class, 'upload']);
Route::post('/upload-news',[beritaController::class,'uploadNews']);
