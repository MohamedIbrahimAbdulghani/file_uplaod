<?php

use App\Http\Controllers\UploadFileController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/show', [UploadFileController::class, "show"])->name("upload.show");
Route::post('/storeUsers', [UploadFileController::class, "storeUsers"])->name("upload.storeUsers");
Route::post('/storeAdmins', [UploadFileController::class, "storeAdmins"])->name("upload.storeAdmins");
Route::get('show/images', [UploadFileController::class, "index"])->name("show/images");
