<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CRUDcontroller;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/index', function () {
    return view('index');
});

Route::get('/element', function () {
    return view('elements');
});

Route::get('/generic', function () {
    return view('generic');
});

Route::get('/1st', function () {
    return view('1st-file');
});

Route::get('/2nd', function () {
    return view('2nd-file');
});

Route::get('/3rd', function () {
    return view('3rd-file');
});

Route::get('/Crud',[CRUDcontroller::class,'greeting']);



?>