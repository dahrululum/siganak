<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
 
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
 
 
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
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [FrontController::class,'index']);
Route::get('/datadasar/{anak}/{wil?}', [FrontController::class,'datadasar'])->name('front.data-anak');
Route::get('/datadasar/{gender}/{wil?}', [FrontController::class,'datadasar'])->name('front.data-gender');
Route::get('/indikator', [FrontController::class,'indikator'])->name('front.indikator');
Route::get('/publikasi', [FrontController::class,'publikasi'])->name('front.publikasi');
Route::get('/detail-publikasi/{alias}', [FrontController::class,'detailpublikasi'])->name('front.detailpublikasi');
Route::get('/artikel', [FrontController::class,'artikel'])->name('front.artikel');
//search
Route::get('/search', [FrontController::class,'search'])->name('front.search');


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
Route::get('/admin/resetuser/{id}',  [AdminController::class,'resetuser'])->name('admin.resetuser');
Route::post('/admin/post-resetuser', [AdminController::class,'postEditresetuser']); 



Route::get('admin/userpd', [AdminController::class,'userpd'])->name('admin.userpd');
Route::get('/admin/adduserpd', [AdminController::class,'adduserpd'])->name('admin.adduserpd');
Route::post('/admin/post-adduserpd', [AdminController::class,'postAdduserpd']); 
Route::get('/admin/edituserpd/{id}',  [AdminController::class,'edituserpd'])->name('admin.edituserpd');
Route::post('/admin/post-edituserpd', [AdminController::class,'postEdituserpd']); 

Route::get('/admin/deluser/{id}',  [AdminController::class,'deluser']);
 
//10 06 2024
//wilayah
Route::get('admin/wilayah', [AdminController::class,'wilayah'])->name('admin.wilayah');
//jenis
Route::get('admin/jenis', [AdminController::class,'jenis'])->name('admin.jenis');
//01 okt 2024
//bidang
Route::get('admin/bidang', [AdminController::class,'bidang'])->name('admin.bidang');
Route::get('/admin/addbidang', [AdminController::class,'addbidang'])->name('admin.addbidang');
Route::post('/admin/post-addbidang', [AdminController::class,'postAddbidang']); 
Route::get('/admin/editbidang/{id}',  [AdminController::class,'editbidang'])->name('admin.editbidang');
Route::post('/admin/post-editbidang', [AdminController::class,'postEditbidang']); 
Route::get('/admin/delbidang/{id}',  [AdminController::class,'delbidang']);
//periode
Route::get('admin/periode', [AdminController::class,'periode'])->name('admin.periode');
Route::get('admin/status-periode/', [AdminController::class,'periodestatus'])->name('periodestatus');
//target indikator
Route::get('admin/target', [AdminController::class,'target'])->name('admin.target');
Route::get('/admin/addtarget', [AdminController::class,'addtarget'])->name('admin.addtarget');
Route::post('/admin/post-addtarget', [AdminController::class,'postAddtarget']); 
Route::get('/admin/edittarget/{id}',  [AdminController::class,'edittarget'])->name('admin.edittarget');
Route::post('/admin/post-edittarget', [AdminController::class,'postEdittarget']); 
Route::get('/admin/deltarget/{id}',  [AdminController::class,'deltarget']);

//elemen
Route::get('admin/elemen', [AdminController::class,'elemen'])->name('admin.elemen');
Route::get('/admin/addelemen', [AdminController::class,'addelemen'])->name('admin.addelemen');
Route::post('/admin/post-addelemen', [AdminController::class,'postAddelemen']); 
Route::get('/admin/editelemen/{id}',  [AdminController::class,'editelemen'])->name('admin.editelemen');
Route::post('/admin/post-editelemen', [AdminController::class,'postEditelemen']); 
Route::get('/admin/delelemen/{id}',  [AdminController::class,'delelemen']);

//nilai
Route::get('admin/nilai/{id?}', [AdminController::class,'nilai'])->name('admin.nilai');
Route::post('admin/post-nilaielemen', [AdminController::class,'postNilaielemen']);

Route::get('admin/laporan/{id?}', [AdminController::class,'laporan'])->name('admin.laporan');

//publikasi & informasi
Route::get('admin/publikasi', [AdminController::class,'publikasi'])->name('admin.publikasi');
Route::get('/admin/addpublikasi', [AdminController::class,'addpublikasi'])->name('admin.addpublikasi');
Route::post('/admin/post-addpublikasi', [AdminController::class,'postAddpublikasi']); 
Route::get('/admin/editpublikasi/{id}',  [AdminController::class,'editpublikasi'])->name('admin.editpublikasi');
Route::post('/admin/post-editpublikasi', [AdminController::class,'postEditpublikasi']); 
Route::get('/admin/delpublikasi/{id}',  [AdminController::class,'delpublikasi']);

Route::get('admin/dialog_uploadpub/{id}/{label}', [AdminController::class,'dialoguploadpub'])->name('admin.dialoguploadpub');
Route::post('/admin/uploadactionpub',  [AdminController::class,'uploadactionpub'])->name('admin.uploadactionpub');

Route::get('admin/weblink', [AdminController::class,'weblink'])->name('admin.weblink');
Route::get('/admin/addweblink', [AdminController::class,'addweblink'])->name('admin.addweblink');
Route::post('/admin/post-addweblink', [AdminController::class,'postAddweblink']); 
Route::get('/admin/editweblink/{id}',  [AdminController::class,'editweblink'])->name('admin.editweblink');
Route::post('/admin/post-editweblink', [AdminController::class,'postEditweblink']); 
Route::get('/admin/delweblink/{id}',  [AdminController::class,'delweblink']);

Route::get('admin/dialog_uploadwl/{id}/{label}', [AdminController::class,'dialoguploadwl'])->name('admin.dialoguploadwl');
Route::post('/admin/uploadactionwl',  [AdminController::class,'uploadactionwl'])->name('admin.uploadactionwl');

//artikel
//12 okt 2024
Route::get('admin/artikel', [AdminController::class,'artikel'])->name('admin.artikel');
Route::get('/admin/addartikel', [AdminController::class,'addartikel'])->name('admin.addartikel');
Route::post('/admin/post-addartikel', [AdminController::class,'postAddartikel']); 
Route::get('/admin/editartikel/{id}',  [AdminController::class,'editartikel'])->name('admin.editartikel');
Route::post('/admin/post-editartikel', [AdminController::class,'postEditartikel']); 
Route::get('/admin/delartikel/{id}',  [AdminController::class,'delartikel']);

Route::get('admin/dialog_uploadart/{id}/{label}', [AdminController::class,'dialoguploadart'])->name('admin.dialoguploadart');
Route::post('/admin/uploadactionart',  [AdminController::class,'uploadactionart'])->name('admin.uploadactionart');

//indikator
//13 aug 2024
Route::get('admin/indikator', [AdminController::class,'indikator'])->name('admin.indikator');
Route::get('/admin/addindikator', [AdminController::class,'addindikator'])->name('admin.addindikator');
Route::post('/admin/post-addindikator', [AdminController::class,'postAddindikator']); 
Route::get('/admin/editindikator/{id}',  [AdminController::class,'editindikator'])->name('admin.editindikator');
Route::post('/admin/post-editindikator', [AdminController::class,'postEditindikator']); 
Route::get('/admin/delindikator/{id}',  [AdminController::class,'delindikator']);

//nilai indikator
Route::get('admin/nindi', [AdminController::class,'nindi'])->name('admin.nindi');
Route::get('/admin/isinindi/{id}',  [AdminController::class,'isinindi'])->name('admin.isinindi');
Route::post('/admin/post-isinindi', [AdminController::class,'postIsinindi']); 
//Route::get('/admin/resetuser/{id}', 'Auth\AdminAuthController@resetuser')->name('admin.resetuser');
//Route::post('/admin/post-resetuser', 'Auth\AdminAuthController@postResetuser'); 

 

