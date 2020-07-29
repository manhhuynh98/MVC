<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MyController;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\DB;
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

// query builder

Route::get('qb/where', function () {
    $data = DB::table('users')->where('id','=',9)->get();
    //var_dump($data);
    foreach ($data as $row) {
        foreach ($row as $key => $value) {
            echo $key.":".$value."<br>";
        }
        echo "<hr>";
    }
});

//select * from users where id = 9

Route::get('qb/get', function () {
    $data = DB::table('users')->get();
    //var_dump($data);
    foreach ($data as $row) {
        foreach ($row as $key => $value) {
            echo $key.":".$value."<br>";
        }
        echo "<hr>";
    }
});

//select id name, email

Route::get('qb/select', function () {
    $data = DB::table('users')->select(['id','name','email'])->where('id',9)->get();
    foreach ($data as $row) {
        foreach ($row as $key => $value) {
            echo $key.":".$value."<br>";
        }
        echo "<hr>";
    }
});

//select name as hoten from....
Route::get('qb/raw', function () {
    $data = DB::table('users')->select(DB::raw('id,name as hoten,email'))->where('id',9)->get();
    foreach ($data as $row) {
        foreach ($row as $key => $value) {
            echo $key.":".$value."<br>";
        }
        echo "<hr>";
    }
});

Route::get('qb/orderBy', function () {
    $data = DB::table('users')->select(DB::raw('id,name as hoten,email'))->orderByDesc('id')->skip(1)->take(5)->get();
    foreach ($data as $row) {
        foreach ($row as $key => $value) {
            echo $key.":".$value."<br>";
        }
        echo "<hr>";
    }
});

Route::get('qb/deleteAll', function () {
    DB::table('users')->truncate();
    echo "da xoa";

});

//model
Route::get('model/save', function () {
    $user = new App\User();
    $user->name = "mai";
    $user->email= "mia@gmail.com";
    $user->password = "matkhau";

    $user->save();
    echo "da save";
});

Route::get('model/view', function () {
    $user = App\User::find(2);
    echo $user->name;
});

Route::get('model/sanpham/save/{ten}', function ($ten) {
    $sanpham = new App\SanPham();
    $sanpham->ten = $ten;
    $sanpham->soluong = 100;
    $sanpham->save();
    echo " da save ".$ten;
});

Route::get('model/sanpham/all', function () {
    $sanpham = App\SanPham::all()->toJson();
    echo $sanpham;
});

Route::get('taocot', function () {
    Schema::table('sanpham', function ($table) {
        $table->integer('id_loaisanpham')->unsigned();
    });
});

Route::get('lienket', function () {
    $data = App\SanPham::find(2)->loaisanpham->toArray();
    var_dump($data);
});

Route::get('diem', function () {
    echo "Bạn đã có điểm";
})->middleware('MyMiddle')->name('diem');

Route::get('loi', function () {
    echo "Bạn chưa có điểm";
})->name('loi');

Route::get('nhapdiem', function () {
    return view('nhapdiem');
})->name('nhapdiem');

//auth

Route::get('dangnhap', function () {
    return view('dangnhap');
});

Route::get('thanhcong', function () {
    return view('thanhcong');
});

Route::post('login', 'AuthController@login')->name('login');

Route::get('logout', 'AuthController@logout');


Route::group(['middleware' => ['web']], function () {
    //sesion
    Route::get('Session', function () {
        session(['KhoaHoc'=>'Laravel']);
        session(['laptrinh'=>'php']);
        //echo "đã đặt session <br>";

        session()->flash('mess','Hello');
        //session()->flush();
        //session()->forget('KhoaHoc');
        echo session('mess');
        if (session()->has('KhoaHoc')) {
            echo "co khoa hoc";
        }else{
            echo "k có khóa học";
        }
    });

    Route::get('Session/flash', function () {
        echo session('mess');
    });
});

Route::get('tin','TinController@index');

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

