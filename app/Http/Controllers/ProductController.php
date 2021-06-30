<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class ProductController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function add_product(){
        $this->AuthLogin();
        $cate_product = DB::table('category_product')->orderby('id','desc')->get();
        return view('admin.add_product')->with('cate_product', $cate_product);
    }
    public function all_product(){
        $this->AuthLogin();
        $all_product = DB::table('product')
        ->join('category_product','category_product.id','=','product.cate_id')
        ->orderby('product.id_product','desc')->get();
        $manager_product = view('admin.all_product')->with('all_product',$all_product);
        return view('admin_layout')->with('admin.all_product',$manager_product);
    }
    public function save_product(Request $request){
        $this->AuthLogin();
        $data = array();
        $data['name'] = $request->name;
        $data['short_desc'] = $request->short_desc;
        $data['regular_price'] = $request->regular_price;
        $data['sale_price'] = $request->sale_price;
        $data['description'] = $request->description;
        $data['featured'] = $request->featured;
        $data['best_seller'] = $request->best_seller;
        $data['cate_id'] = $request->cate_id;
        $data['status'] = $request->status;

        $get_image =  $request->file('product_img');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product',$new_image);
            $data['product_img'] = $new_image;
            DB::table('product') -> insert($data);
            Session::put('message','Thêm sản phẩm thành công');
            return Redirect::to('add-product');
        }
        $data['product_img'] = '';
        DB::table('product')-> insert($data);
        Session::put('message','Thêm sản phẩm thành công');
        return Redirect::to('add-product');
    }
    public function unactive_product($product_id){
        $this->AuthLogin();
        DB::table('product')->where('id_product',$product_id)->update(['status'=>1]);
        Session::put('message','Kích hoạt sản phẩm thành công');
        return Redirect::to('all-product');
    }
    public function active_product($product_id){
        $this->AuthLogin();
        DB::table('product')->where('id_product',$product_id)->update(['status'=>0]);
        Session::put('message','Không kích hoạt sản phẩm thành công');
        return Redirect::to('all-product');
    }

    public function edit_product($product_id){
        $this->AuthLogin();
        $cate_product = DB::table('category_product')->orderby('id','desc')->get();

        $edit_product = DB::table('product')->where('id_product',$product_id)->get();
        $manager_product = view('admin.edit_product')->with('edit_product',$edit_product)->with('cate_product', $cate_product);
        return view('admin_layout')->with('admin.edit_product',$manager_product);
    }
    public function update_product(Request $request,$product_id){
        $this->AuthLogin();
        $data = array();
        $data['name'] = $request->name;
        $data['short_desc'] = $request->short_desc;
        $data['regular_price'] = $request->regular_price;
        $data['sale_price'] = $request->sale_price;
        $data['description'] = $request->description;
        $data['featured'] = $request->featured;
        $data['best_seller'] = $request->best_seller;
        $data['cate_id'] = $request->cate_id;
        $data['status'] = $request->status;
        $get_image = $request->file('product_img');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product',$new_image);
            $data['product_img'] = $new_image;
            DB::table('product')->where('id_product',$product_id)->update($data);
            Session::put('message','Cập nhật sản phẩm thành công');
            return Redirect::to('all-product');
        }
        DB::table('product')->where('id_product',$product_id)->update($data);
        Session::put('message','Cập nhật sản phẩm thành công');
        return Redirect::to('all-product');
    }
    public function delete_product($product_id){
        $this->AuthLogin();
        DB::table('product')->where('id_product',$product_id)->delete();
        Session::put('message','Xóa sản phẩm thành công');
        return Redirect::to('all-product');
    }
    //end admin product

    public function product_detail($product_id){
        $cate_product = DB::table('category_product')->where('cate_status','1')->orderby('id','desc')->get();
        $details_product = DB::table('product')
        ->join('category_product','category_product.id','=','product.cate_id')
        ->where('product.id_product',$product_id)->get();

        foreach($details_product as $key => $value){
            $category_id = $value->cate_id;
        }

        $related_product = DB::table('product')
        ->join('category_product','category_product.id','=','product.cate_id')
        ->where('category_product.id',$category_id)->whereNotIn('product.id_product',[$product_id])->get();

        return view('pages.sanpham.product_details')->with('cate_product', $cate_product)
        ->with('product_details', $details_product)
        ->with('relate', $related_product);
    }
}
