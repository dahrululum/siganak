<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
 
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\NomenklaturJabatanController;

//03 Juli 2023
use App\Http\Controllers\UraianJabatanController;
use App\Http\Controllers\AnalisaJabatanController;

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

 

//Route::get('/', [AdminController::class,'index']);
Route::get('/', function () {
    return view('welcome');
});
//admin
Route::get('admin', [AdminController::class,'index'])->name('admin.index');
Route::get('admin/login', [AdminController::class,'index'])->name('admin.login');
Route::post('admin/postlogin', [AdminController::class,'postLogin']);

Route::post('admin/logout',[AdminController::class,'postLogout'] );
 
/* user */
Route::get('admin/useradmin', [AdminController::class,'useradmin'])->name('admin.useradmin');
Route::get('/admin/adduseradmin', [AdminController::class,'adduseradmin'])->name('admin.adduseradmin');
Route::post('/admin/post-adduseradmin', [AdminController::class,'postAdduseradmin']); 
Route::get('/admin/edituseradmin/{id}',  [AdminController::class,'edituseradmin'])->name('admin.edituser');
Route::post('/admin/post-edituseradmin', [AdminController::class,'postEdituseradmin']); 

Route::get('admin/userpd', [AdminController::class,'userpd'])->name('admin.userpd');
Route::get('/admin/adduserpd', [AdminController::class,'adduserpd'])->name('admin.adduserpd');
Route::post('/admin/post-adduserpd', [AdminController::class,'postAdduserpd']); 
Route::get('/admin/edituserpd/{id}',  [AdminController::class,'edituserpd'])->name('admin.edituserpd');
Route::post('/admin/post-edituserpd', [AdminController::class,'postEdituserpd']); 

Route::get('/admin/deluser/{id}',  [AdminController::class,'deluser']);
 

//Route::get('/admin/resetuser/{id}', 'Auth\AdminAuthController@resetuser')->name('admin.resetuser');
//Route::post('/admin/post-resetuser', 'Auth\AdminAuthController@postResetuser'); 

 

