<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class NewsController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function add_news(){
        $this->AuthLogin();
        $cate_new = DB::table('category_new')->orderby('id_cate','desc')->get();
        return view('admin.add_news')->with('cate_new', $cate_new);
    }
    public function all_news(){
        $this->AuthLogin();
        $all_news = DB::table('news')
        ->join('category_new','category_new.id_cate','=','news.cate_id')
        ->orderby('news.id_news','desc')->get();
        $manager_news = view('admin.all_news')->with('all_news',$all_news);
        return view('admin_layout')->with('admin.all_news',$manager_news);
    }
    public function save_news(Request $request){
        $this->AuthLogin();
        $data = array();
        $data['title'] = $request->title;
        $data['short_content'] = $request->short_content;
        $data['content'] = $request->content;
        $data['cate_id'] = $request->cate_id;
        $data['status_news'] = $request->status_news;

        $get_image =  $request->file('img1');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/news',$new_image);
            $data['img1'] = $new_image;
            DB::table('news') -> insert($data);
            Session::put('message','Thêm sản phẩm thành công');
            return Redirect::to('add-news');
        }
        $data['img1'] = '';

        DB::table('news')-> insert($data);
        Session::put('message','Thêm sản phẩm thành công');
        return Redirect::to('add-news');
    }
    public function unactive_news($news_id){
        $this->AuthLogin();
        DB::table('news')->where('id_news',$news_id)->update(['status_news'=>1]);
        Session::put('message','Kích hoạt tin tức thành công');
        return Redirect::to('all-news');
    }
    public function active_news($news_id){
        $this->AuthLogin();
        DB::table('news')->where('id_news',$news_id)->update(['status_news'=>0]);
        Session::put('message','Không kích hoạt tin tức thành công');
        return Redirect::to('all-news');
    }

    public function edit_news($news_id){
        $this->AuthLogin();
        $cate_news = DB::table('category_new')->orderby('id_cate','desc')->get();

        $edit_news = DB::table('news')->where('id_news',$news_id)->get();
        $manager_news = view('admin.edit_news')->with('edit_news',$edit_news)->with('cate_news', $cate_news);
        return view('admin_layout')->with('admin.edit_news',$manager_news);
    }
    public function update_news(Request $request,$news_id){
        $this->AuthLogin();
        $data = array();
        $data['title'] = $request->title;
        $data['short_content'] = $request->short_content;
        $data['content'] = $request->content;
        $data['cate_id'] = $request->cate_id;
        $data['status_news'] = $request->status_news;


        $get_image =  $request->file('img1');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/news',$new_image);
            $data['img1'] = $new_image;
            DB::table('news') -> update($data);
            Session::put('message','Cập nhật tin tức thành công');
            return Redirect::to('all-news');
        }
        DB::table('news')->where('id_news',$news_id)-> update($data);
        Session::put('message','Cập nhật tin tức thành công');
        return Redirect::to('all-news');
    }
    public function delete_news($news_id){
        $this->AuthLogin();
        DB::table('news')->where('id_news',$news_id)->delete();
        Session::put('message','Xóa tin tức thành công');
        return Redirect::to('all-news');
    }
}
