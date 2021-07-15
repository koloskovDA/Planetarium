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
    $stages = \App\Models\Stage::where('ends_at', '>=', \Carbon\Carbon::now())->orderBy('starts_at')->get();
    $half = ceil($stages->count() / 2);
    $chunks = $stages->chunk($half);
    return view('welcome')->with([
        'texts' => \App\Models\Text::orderBy('id', 'asc')->get(),
        'current_stage' => $current_stage,
        'stages' => $chunks,
    ]);
});

Route::get('/login', [\App\Http\Controllers\MainController::class, 'login']);
Route::post('/checklogin', [\App\Http\Controllers\MainController::class, 'checklogin']);
Route::get('/admin', [\App\Http\Controllers\MainController::class, 'admin'])->name('admin');
Route::get('/logout', [\App\Http\Controllers\MainController::class, 'logout']);
Route::post('/stage', [\App\Http\Controllers\MainController::class, 'stage'])->name('stage');
Route::post('/delete/{stage}', [\App\Http\Controllers\MainController::class, 'delete']);

Route::get('/texts', [\App\Http\Controllers\MainController::class, 'texts'])->name('texts');
Route::post('/text', [\App\Http\Controllers\MainController::class, 'text'])->name('text');
Route::get('/edit/{text}', [\App\Http\Controllers\MainController::class, 'editText']);
Route::post('/edit/{text}', [\App\Http\Controllers\MainController::class, 'saveEditedText'])->name('saveEditedText');
