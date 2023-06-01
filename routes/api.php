<?php

use App\Http\Controllers\DataController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\BannerPenggunaController;
use App\Http\Controllers\RatingRestoController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\MinumanController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\DropSpotController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::controller(UserController::class)->group(function () {
    Route::get('/user/{role}', 'getUsersByRole'); // Get All User By Role   
    Route::get('users/{id}', 'getUserByID');
    Route::get('orderusers/{id}', 'getOrderById');
    Route::get('orderuserscomplete/{id}', 'getOrderByIdComplete');
    Route::get('userdetail', 'getUserDetail');
    Route::post('login', 'loginUser');
    Route::get('logout', 'UserLogout');
})->middleware('auth.api');

Route::controller(AdminController::class)->group(function () {
    Route::post('/admin/register', 'RegisterUser');
    Route::get('/admin/listmitra', 'Listmitra');
    Route::put('/admin/update-profile', 'editUser'); // Update Profile      

})->middleware('auth.api');

Route::controller(MitraController::class)->group(function () {
    //barang dari akun
    // Route::put('/mitra/barang/{id}', 'updateBarang');
    // Route::delete('/mitra/barang/{id}', 'hapusBarang');
    Route::get('/mitra/barang', 'index');
    Route::get('/mitra/order/{id}', 'getOrderById');
    Route::get('/mitra/orderreq/{id}', 'getOrderByIdReq');
    Route::get('/mitra/orderonpr/{id}', 'getOrderByIdonProg');
    Route::get('/mitra/ordercomplete/{id}', 'getOrderByIdComplete');

    Route::post('/mitra/tambahbarang', 'store');
})->middleware('auth.api');

Route::controller(BannerPenggunaController::class)->group(function () {
    Route::get('/bannerPengguna', 'show'); // Get All User By Role   
})->middleware('auth.api');

Route::controller(DataController::class)->group(function () {
    Route::get('/data', 'index'); // Get All User By Role   
    Route::get('/dataactive', 'indexactive'); // Get All User By Role   
    Route::get('/datanotactive', 'indexnotactive'); // Get All User By Role   
    Route::get('/data/{id}', 'dataById'); // Get All User By Role   
    Route::put('/data/{id}', 'update');
})->middleware('auth.api');


Route::controller(BarangController::class)->group(function () {
    Route::post('/tambahmakanan', 'store');
    Route::put('/editmakanan/{id}', 'update');
    Route::delete('/delmakanan/{id}', 'destroy');

})->middleware('auth.api');

Route::controller(MinumanController::class)->group(function () {
    Route::post('/tambahminuman', 'store');
    Route::put('/editminuman/{id}', 'update');
    Route::delete('/delminuman/{id}', 'destroy');

})->middleware('auth.api');

Route::controller(RatingRestoController::class)->group(function () {
    Route::post('/tambahrating', 'store');
    Route::get('/rating', 'index');
    Route::get('/rating/{id}', 'ratingByDataID'); // Get All User By Role   
})->middleware('auth.api');

Route::controller(LokasiController::class)->group(function () {
    Route::get('/lokasi', 'index'); // Get All User By Role   
})->middleware('auth.api');

Route::controller(DropSpotController::class)->group(function () {
    Route::get('/dropspot', 'index'); // Get All User By Role   
    Route::get('/dropspot/{id}', 'indexwithid'); // Get All User By Role   
})->middleware('auth.api');
//pengguna