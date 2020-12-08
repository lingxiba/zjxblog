<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\PostController;
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
//定义域名跳转首页
Route::get('/', function () {
    return redirect('/index');
});

//定义首页路由
Route::get('/index',[IndexController::class,'home'])->name('main');
//测试可选参数路由
//Route::get('/a/{id?}', function ($id=1) {
//    return $id;
//})->where('id','[0-9]+');//正则匹配纯数字参数
//Route::get('/a/{id?}', function ($id=1) {
//    return $id;
//})->where('id','[a-zA-Z]+');//正则匹配纯字母参数
//Route::get('/a/{id}/{slug}', function ($id, $slug) {
//    return $id . ':' . $slug;
//})->where(['id' => '[0-9]+', 'slug' => '[A-Za-z]+']);//正则匹配双参数，数字+字母
//测试a路由
Route::prefix('/a')->name('user.')->group(function (){
    Route::get('/a', function () {
        return view('index/aaa');
    })->name('a');
    Route::get('/b', function () {
        return view('index/bbb');
    })->name('b');
});
Route::get('task', [TaskController::class,'index'])->name('task.index');
Route::get('task/create', [TaskController::class,'create'])->name('task.create');
Route::post('task/store', [TaskController::class,'store'])->name('task.store');
Route::get('task/show', [TaskController::class,'show'])->name('task.show');

Route::resource('/post',PostController::class);
//Route::get('/post/{id}/delete', [
//    'as' => 'post.delete',
//    'uses' => PostController::class,'destroy'
//]);


