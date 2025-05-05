<?php

use App\Http\Controllers\HalamanController;
use Illuminate\Support\Facades\Route;

// Jika tidak menggunakan controller, kita bisa langsung menuliskan route ke view
// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/biodata', function () {
//     return view('biodata');
// });

// Route::get('/kontak', function () {
//     return view('kontak');
// });

// Route::get('/hobi', function () {
//     return view('hobi');
// });

// jika menggunakan controller, kita bisa menuliskan route ke controller
Route::get('/', [HalamanController::class, 'home']);
Route::get('/biodata', [HalamanController::class, 'biodata']);
Route::get('/medsos', [HalamanController::class, 'medsos']);
Route::get('/hobi', [HalamanController::class, 'hobi']);
Route::get('/yanti', [HalamanController::class, 'yanti']);
Route::get('/biodatayanti', [HalamanController::class, 'biodatayanti']);
Route::get('/medsosyanti', [HalamanController::class, 'medsosyanti']);
Route::get('/makananyanti', [HalamanController::class, 'makananyanti']);