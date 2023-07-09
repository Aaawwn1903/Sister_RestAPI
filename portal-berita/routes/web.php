<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Models\Berita;

Route::get('/berita', function () {
    $beritas = Berita::all();
    return view('berita', compact('beritas'));
});

Route::get('/', function () {
    return view('welcome');
    
});
