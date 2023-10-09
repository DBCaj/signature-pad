<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignaturePadController;

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

Route::redirect('/', 'signature-pad');

Route::get('signature-pad', [SignaturePadController::class, 'index'])->name('signpad.home');
Route::post('signature-pad', [SignaturePadController::class, 'save'])->name('signpad.save');

Route::get('/list', [SignaturePadController::class, 'list'])->name('signpad.list');