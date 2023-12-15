<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfrastructureController;
use App\Http\Controllers\ReservationController;
// use App\Http\Controllers\ViewController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post_infrastructure',[InfrastructureController::class,'getAllStruc'])->name('struc.getallStruc');
Route::get('/infrastructure',[InfrastructureController::class,'addStruc'])->name('struc.add');
Route::post('/infrastructure',[InfrastructureController::class,'addStrucSubmit'])->name('struc.addsubmit');
Route::get('/post_infrastructure/{nom}',[InfrastructureController::class,'getStrucById'])->name('struc.getbyid');

Route::get('/reservation',[ReservationController::class,'getAllPost'])->name('post.getallPost');
Route::get('/add_reservation',[ReservationController::class,'addPost'])->name('post.add');
Route::post('/add_reservation',[ReservationController::class,'addPostSubmit'])->name('post.addsubmit');

Route::get('/reservation/{matricule}',[ReservationController::class,'getPostById'])->name('post.getbyid');
Route::get('/delete_post/{matricule}',[ReservationController::class,'deletePost'])->name('post-delete');
Route::get('/edit_post/{matricule}',[ReservationController::class,'editPost'])->name('post.edit');
Route::post('/update_post',[ReservationController::class,'updatePost'])->name('post.update');

Route::post('/add-reservation',[ReservationController::class,'updateStatusPost'])->name('post.updateStatus');
Route::post('/add-reservation',[ReservationController::class,'deleteStatusPost'])->name('post.deleteStatus');

// Route::get('/post-infrastructure','ViewController@connect')->name('connect');
// Route::get('/add-reservation','ViewController@connect')->name('connect');
// Route::post('/connect','ViewController@connect');
