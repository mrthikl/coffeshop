<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomeController extends Controller
{
    public function index(){

        return view('home_layout');
    }
    public function show_home(){
        $cate_product = DB::table('category_product')->where('cate_status','0')->orderby('id','desc')->get();
        $all_news = DB::table('news')->where('status_news','1')->orderby('id_news','desc')->limit(4)->get();
        $all_product = DB::table('product')->where('featured','0')->orderby('id_product','desc')->limit(4)->get();
        return view('pages.home')->with('category',$cate_product)->with('all_product',$all_product)->with('all_news',$all_news);
    }

}
