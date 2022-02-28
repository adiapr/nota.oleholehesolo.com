<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\UploadFileController;

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

//call the controller and its method
Route::get('/upload-form', [UploadFileController::class, 'index']);
Route::any('/upload', [UploadFileController::class, 'upload']);

Auth::routes([
    'register' => false,
    'reset' => false
]);

Route::get('/', [HomeController::class, 'index']);

Route::post('/nota/add',            [NotaController::class, 'notaAdd']);
Route::post('/nota/delete/{id}',    [NotaController::class, 'notaDelete']);
