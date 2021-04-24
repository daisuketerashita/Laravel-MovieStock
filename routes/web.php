<?php

use App\Http\Controllers\StockController;
use App\Http\Controllers\PlanController;
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



Auth::routes();

Route::get('/detail/{id}/',[StockController::class,'detail'])->name('detail');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    //ホーム画面（観た映画一覧）
    Route::get('/',[StockController::class,'index'])->name('index');

    //観たい映画一覧
    Route::get('/plan/',[PlanController::class,'index'])->name('plan');

    //観た映画登録ページ
    Route::get('/stock/',[StockController::class,'create'])->name('create');
    //観た映画登録処理
    Route::post('/stock/store/',[StockController::class,'store'])->name('store');

    //観たい映画登録ページ
    Route::get('/plan/movie',[PlanController::class,'create'])->name('add');
    //観たい映画登録処理
    Route::post('/plan/movie/store/',[PlanController::class,'store'])->name('update');

    //観たい映画の削除機能
    Route::get('/plan/delete/',[PlanController::class,'delete'])->name('delete');
});
