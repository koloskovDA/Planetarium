<?php

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
    $current_stage = \App\Models\Stage::where('starts_at', '<=', \Carbon\Carbon::now())->where('ends_at', '>=', \Carbon\Carbon::now())->first();
    $stages = \App\Models\Stage::where('ends_at', '>=', \Carbon\Carbon::now())->orderBy('starts_at')->get()->chunk(2);
    return view('welcome')->with([
        'current_stage' => $current_stage,
        'stages' => $stages,
    ]);
});

Route::get('/login', [\App\Http\Controllers\MainController::class, 'login']);
Route::post('/checklogin', [\App\Http\Controllers\MainController::class, 'checklogin']);
Route::get('/admin', [\App\Http\Controllers\MainController::class, 'admin']);
Route::get('/logout', [\App\Http\Controllers\MainController::class, 'logout']);
Route::post('/stage', [\App\Http\Controllers\MainController::class, 'stage'])->name('stage');
Route::post('/delete/{stage}', [\App\Http\Controllers\MainController::class, 'delete']);
