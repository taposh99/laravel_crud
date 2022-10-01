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
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[\App\Http\Controllers\BlogController:: class,'index'])->name('/');
Route::post('new-blog',[\App\Http\Controllers\BlogController:: class,'blog'])->name('new.blog');
Route::get('all-blog',[\App\Http\Controllers\BlogController:: class,'allBlog'])->name('all.blog');
Route::get('edit-blog/{id}',[\App\Http\Controllers\BlogController:: class,'editblog'])->name('edit.blog');
Route::post('delete-blog',[\App\Http\Controllers\BlogController:: class,'deleteblog'])->name('delete.blog');
Route::post('/update-blog',[\App\Http\Controllers\BlogController::class,'updateBlog'])->name('update.blog');

