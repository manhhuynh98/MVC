<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

Route::get('/', function () {
    return view('welcome');
});

Route::get('KhoaHoc', function () {
    return "hello world";
});

Route::get('KhoaHoc/Laravel', function () {
    echo "<h1>Khoa Hoc - Laravel</h1>";
});
//truyen tham so
Route::get('HoTen/{ten}', function ($ten) {
    echo "tên của bạn là: ".$ten;

});

//dinh danh
Route::get('Route1', ['as'=>'MyRoute', function() {
    echo "hello world";
}]);

Route::get('Route2', function () {
    echo "day là route 2";
})->name('MyRoute2');

Route::get('GoiTen', function () {
    return redirect()->route('MyRoute2');
});

Route::group(['prefix' => 'MyGroup'], function () {
    //GỌi Route User1" domain/MyGroup/User1
    Route::get('User1', function () {
        echo "Users1";
    });
    Route::get('User2', function () {
        echo "Users2";
    });
    Route::get('User2', function () {
        echo "Users2";
    });
});

//Goi controller
Route::get('GoiController', 'MyController@Hello');

Route::get('ThamSo/{ten}', 'MyController@KhoaHoc');

Route::get('MyRequest', 'MyController@GetURL');

//gui nhan du liệu với request
Route::get('GetForm', function () {
    return view('postForm');
});

Route::post('postForm',['as'=>'postForm','uses'=>'MyController@postForm'] );

//Cookie
Route::get('setCookie', 'MyController@setCookie');
Route::get('getCookie', 'MyController@getCookie');

Route::get('uploadFile', function () {
    return view('postFile');
});

Route::post('postFile',['as'=>'postFile','uses'=>'MyController@postFile']);

//json
Route::get('getJson', 'MyController@getJson');

//view

Route::get('myView','MyController@myView');

Route::get('Time/{t}', 'MyController@Time');

view()->share('KhoaHoc', 'laravel');

//blade template
Route::get('blade', function () {
    return view('page.php');
});

Route::get('BladeTemplate/{str}','MyController@blade');

//database

Route::get('database', function () {
    Schema::create('users', function ($table) {
        $table->increments('id');
        $table->string('name', 100);
        $table->string('diachi',100);
    });
    echo "Da tao bang";
});

Route::get('Lienketbang', function () {
    Schema::create('sanpham', function ($table) {
        $table->increments('id');
        $table->string('ten');
        $table->float('gia');
        $table->integer('soluong')->default(0);
        $table->integer('id_loaisanpham')->unsigned();
        $table->foreign('id_loaisanpham')->references('id')->on('users');
    });
});

Route::get('suabang', function () {
    Schema::table('users', function ($table) {
        $table->dropColumn('diachi');
    });
    echo "success";
});

Route::get('doiten', function () {
    Schema::rename('users', 'theloai');
    echo "ok";
});

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

