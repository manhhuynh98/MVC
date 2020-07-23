<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;


class MyController extends BaseController
{
    public function Hello(){
        echo "Chao Cac Ban!";
    }

    public function KhoaHoc($ten){
        echo "Khoahoc: ".$ten;
        return redirect()->route('MyRoute');
    }

    public function GetURL(Request $request ){
        //return $request->url();
        // if ($request->isMethod('post')) {
        //     echo "phương thức get";
        // }else{
        //     echo "k phải get";
        // }
        if ($request->is('My*')) {
            echo " Có My";
        }
    }

    public function postForm(Request $request){
        echo "your name: ";
        echo $request->input('name');
        // if ($request->has('tuoi')) {
        //     echo "co tham so";
        // }else{
        //     echo "k co tham so";
        // }
    }

    public function setCookie(){
        $response = new Response();
        $response->withCookie('KhoaHoc','Laravel',1);
        return $response;
    }

    public function getCookie(Request $request){
        return $request->cookie('KhoaHoc');
    }

    public function postFile(Request $request){
        if ($request->hasFile('myFile')) {
            $file = $request->file('myFile');
            $filename = $file->getClientOriginalName('myFile');
            if ($file->getClientOriginalExtension('myFile')== "png") {
                $file->move('img',$filename);
                echo "day là file png ";
            }
            echo "upload thanhf coong";
        }else{
            echo "chua co file";
        }


    }

    public function getJson(){
        $arr= ['KhoaPham'=>'Laravel'];
        return response()->json($arr);
    }

    public function myView(){
        return view('view.khoaPham');
    }

    public function Time($t){
        return view('myView',['time'=>$t]);
    }

    public function blade($str){
        $khoahoc = "<b>Laravel - khoa pham</b>";
        if ($str == "laravel") {
            return view('page.laravel',['khoahoc'=>$khoahoc]);
        }elseif ($str == "php") {
            return view('page.php',['khoahoc'=>$khoahoc]);
        }
    }
}
