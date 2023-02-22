<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrCodeController;

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

Route::redirect('/', '/login', 301);

Route::get('/discount', function () {
    return view('discount');
})->middleware('auth');
Route::get('/own_card', function () {
    return view('own_card');
})->middleware('auth');
Route::get('/userprofile', function () {
    return view('welcome');
})->middleware('auth');

//Admin promocíó kezelés
Route::get('/new_product', function () {
    if (Auth::user()->name == 'admin'){
        return view('admin.create_discount');
    }else{
        return view('home');
    }
})->middleware('auth');

Route::get('/discount_settings', function () {
    if (Auth::user()->name == 'admin'){
        return view('admin.index');
    }else{
        return view('home');
    }
})->middleware('auth');
Route::get('/edit_discount', function () {
    if (Auth::user()->name == 'admin'){
        return view('admin.edit');
    }else{
        return view('home');
    }
})->middleware('auth');
Route::get('/edit_discount/{id}', function () {
    if (Auth::user()->name == 'admin'){
        return view('admin.edit_discount');
    }else{
        return view('home');
    }
})->middleware('auth');
Route::get('/delete', function () {
    if (Auth::user()->name == 'admin'){
        return view('admin.delete');
    }else{
        return view('home');
    }
})->middleware('auth');
Route::get('/delete_discount/{id}', function () {
    if (Auth::user()->name == 'admin'){
        return view('admin.agree');
    }else{
        return view('home');
    }
})->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/generate-qrcode', [QrCodeController::class, 'index']);
Route::post('insert_discount', 'App\Http\Controllers\createNewDiscount@create')->middleware('auth');
//new_product
Route::post('deleteDiscount', 'App\Http\Controllers\discountManager@deleteDiscount')->middleware('auth');
Route::post('editDiscount', 'App\Http\Controllers\discountManager@update')->middleware('auth');
