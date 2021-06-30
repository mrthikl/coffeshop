<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class CategoryProduct extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function add_category_product(){
        $this->AuthLogin();
        return view('admin.add_category_product');
    }
    public function all_category_product(){
        $this->AuthLogin();
        $all_category_product = DB::table('category_product')->get();
        $manager_category_product = view('admin.all_category_product')->with('all_category_product',$all_category_product);
        return view('admin_layout')->with('admin.all_category_product',$manager_category_product);
    }
    public function save_category_product(Request $request){
        $this->AuthLogin();
        $data = array();
        $data['cate_name'] = $request->cate_name;
        $data['cate_desc'] = $request->cate_desc;
        $data['cate_status'] = $request->cate_status;

        DB::table('category_product')-> insert($data);
        Session::put('message','Thêm danh mục sản phẩm thành công');
        return Redirect::to('add-category-product');
    }
    public function unactive_category_product($category_product_id){
        $this->AuthLogin();
        DB::table('category_product')->where('id',$category_product_id)->update(['cate_status'=>1]);
        Session::put('message','Kích hoạt danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }
    public function active_category_product($category_product_id){
        $this->AuthLogin();
        DB::table('category_product')->where('id',$category_product_id)->update(['cate_status'=>0]);
        Session::put('message','Không kích hoạt danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }
    public function edit_category_product($category_product_id){
        $this->AuthLogin();
        $this->AuthLogin();
        $edit_category_product = DB::table('category_product')->where('id',$category_product_id)->get();
        $manager_category_product = view('admin.edit_category_product')->with('edit_category_product',$edit_category_product);
        return view('admin_layout')->with('admin.edit_category_product',$manager_category_product);
    }
    public function update_category_product(Request $request,$category_product_id){
        $this->AuthLogin();
        $data = array();
        $data['cate_name'] = $request->cate_name;
        $data['cate_desc'] = $request->cate_desc;
        DB::table('category_product')->where('id',$category_product_id)->update($data);
        Session::put('message','Cập nhật danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }
    public function delete_category_product($category_product_id){
        $this->AuthLogin();
        DB::table('category_product')->where('id',$category_product_id)->delete();
        Session::put('message','Xóa danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }

    //end hàm admin

    public function show_product_home(){
        // $all_product = DB::table('product')->where('featured','1')->orderby('id_product','desc')->limit(4)->get();
        // $category_product = DB::table('category_product')->where('cate_status','1')->orderby('id','desc')->get();

        return view('pages.category.show_category');
    }

    public function show_category_home($category_id){
        $all_product = DB::table('product')->where('featured','1')->orderby('id_product','desc')->limit(4)->get();
        $category_product = DB::table('category_product')->where('cate_status','1')->orderby('id','desc')->get();
        $category_by_id = DB::table('product')->join('category_product','product.cate_id','=','category_product.id')
        ->where('product.cate_id',$category_id)->get();

        return view('pages.category.show_cateproduct')->with('category_product',$category_product)
        ->with('all_product',$all_product)->with('category_by_id',$category_by_id);
    }
}
