<?php

use App\Http\Controllers\Index;
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

Route::get('/', [Index::class, 'index'])->name('index');
Route::post('addStep', [Index::class, 'addStep'])->name('addStep');
Route::post('addStep_finally', [Index::class, 'addStep_finally'])->name('addStep_finally');
Route::post('addStep_finally_lost', [Index::class, 'addStep_finally_lost'])->name('addStep_finally_lost');
Route::post('addStep_draw', [Index::class, 'addStep_draw'])->name('addStep_draw');
Route::post('delete', [Index::class, 'delete'])->name('delete');
