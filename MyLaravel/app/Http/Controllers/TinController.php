<?php

namespace App\Http\Controllers;
use App\Tin;

use Illuminate\Http\Request;

class TinController extends Controller
{
    //
    public function index(){

        $tin = Tin::where('id','>=',5)->paginate(5);

        return view('tin',['tin'=>$tin]);
    }
}
