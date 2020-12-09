<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TempatWisata;
use App\Http\Controllers\Promosi;
use App\Http\Controllers\PesanKlien;
use App\Http\Controllers\Livewire\Auth\Login;
use App\Http\Controllers\Tester;
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
Route::get('/',[IndexController::class,'get_data']);
Route::get('/syarat-dan-ketentuan',[IndexController::class,'syarat_ketentuan']);
Route::get('/kebijakan-privasi',[IndexController::class,'kebijakan_privasi']);

//Tempat Wisata
Route::get('/wisata/pagination',[TempatWisata::class,'pagination']);
Route::get('/wisata/json',[TempatWisata::class,'json']);
Route::get('/wisata/json/{id}',[TempatWisata::class,'get_id_json']);
Route::get('/wisata',[TempatWisata::class,'get_tempat_wisata'])->name('wisata');
Route::get('/wisata/tambah',[TempatWisata::class,'get_form'])->name('tambah-wisata');
Route::get('tempat-wisata/edit/{id}',[TempatWisata::class,'edit_form']);
Route::post('/tempat-wisata/kirim',[TempatWisata::class,'post_tempat_wisata']);
Route::post('/tempat-wisata/update/{id}',[TempatWisata::class,'update_tempat_wisata']);
Route::get('/tempat-wisata/delete/{id}',[TempatWisata::class,'delete_wisata']);

//Promosi
Route::get('promosi/pagination',[Promosi::class,'pagination']);
Route::get('promosi/json',[Promosi::class,'json']);
Route::get('promosi/json/{id}',[Promosi::class,'get_id_json']);
Route::get('/promosi',[Promosi::class,'get_promosi'])->name('promosi');
Route::get('/promosi/tambah',[Promosi::class,'get_form'])->name('tambah-promosi');
Route::get('/promosi/edit/{id}',[Promosi::class,'edit_promosi']);
Route::post('/promosi/kirim',[Promosi::class,'post_promosi']);
Route::post('/promosi/update/{id}',[Promosi::class,'update_promosi']);
Route::get('/promosi/delete/{id}',[Promosi::class,'delete_promosi']);

//pesan klien 
Route::get('/inbox/form',[PesanKlien::class,'get_form']);
Route::get('/inbox',[PesanKlien::class,'get_inbox'])->name('inbox');
Route::get('/inbox/{id}',[PesanKlien::class,'get_id_inbox']);
Route::get('inbox/delete/{id}',[PesanKlien::class,'delete_inbox']);
Route::post('/inbox/kirim',[PesanKlien::class,'post_messages']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');