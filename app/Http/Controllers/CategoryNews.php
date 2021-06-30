<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class CategoryNews extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function add_category_new(){
        $this->AuthLogin();
        return view('admin.add_category_new');
    }
    public function all_category_new(){
        $this->AuthLogin();
        $all_category_new = DB::table('category_new')->get();
        $manager_category_new = view('admin.all_category_new')->with('all_category_new',$all_category_new);
        return view('admin_layout')->with('admin.all_category_new',$manager_category_new);
    }
    public function save_category_new(Request $request){
        $this->AuthLogin();
        $data = array();
        $data['name'] = $request->name;
        $data['description'] = $request->description;
        $data['status'] = $request->status;

        DB::table('category_new')-> insert($data);
        Session::put('message','Thêm loại tin thành công');
        return Redirect::to('add-category-new');
    }
    public function unactive_category_new($category_new_id){
        $this->AuthLogin();
        DB::table('category_new')->where('id_cate',$category_new_id)->update(['status'=>1]);
        Session::put('message','Kích hoạt loại tin thành công');
        return Redirect::to('all-category-new');
    }
    public function active_category_new($category_new_id){
        $this->AuthLogin();
        DB::table('category_new')->where('id_cate',$category_new_id)->update(['status'=>0]);
        Session::put('message','Không kích hoạt loại tin thành công');
        return Redirect::to('all-category-new');
    }
    public function edit_category_new($category_new_id){
        $this->AuthLogin();
        $edit_category_new = DB::table('category_new')->where('id_cate',$category_new_id)->get();
        $manager_category_new = view('admin.edit_category_new')->with('edit_category_new',$edit_category_new);
        return view('admin_layout')->with('admin.edit_category_new',$manager_category_new);
    }
    public function update_category_new(Request $request,$category_new_id){
        $this->AuthLogin();
        $data = array();
        $data['name'] = $request->name;
        $data['description'] = $request->description;
        DB::table('category_new')->where('id_cate',$category_new_id)->update($data);
        Session::put('message','Cập nhật loại tin thành công');
        return Redirect::to('all-category-new');
    }
    public function delete_category_new($category_new_id){
        $this->AuthLogin();
        DB::table('category_new')->where('id_cate',$category_new_id)->delete();
        Session::put('message','Xóa danh mục sản phẩm thành công');
        return Redirect::to('all-category-new');
    }
}
