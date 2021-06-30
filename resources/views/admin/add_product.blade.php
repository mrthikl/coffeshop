@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm sản phẩm
                </header>
                <div class="panel-body">
                    <?php
                        $message = Session::get('message');
                        if($message){
                            echo '<span class="text-alert">'.$message.'</span>';
                            Session::put('message',null);
                        }
                    ?>
                    <div class="position-center">
                        <form role="form" action="{{ URL::to('/save-product') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá sản phẩm</label>
                            <input type="text" name="regular_price" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá sản phẩm đả giảm</label>
                            <input type="text" name="sale_price" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình sản phẩm</label>
                            <input type="file" name="product_img" class="form-control" id="exampleInputEmail1" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả sản phẩm ngắn</label>
                            <textarea style="resize:none" rows="2" type="password" name="short_desc" class="form-control" id="exampleInputPassword1" placeholder="Mô tả danh mục"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả sản phẩm dài</label>
                            <textarea style="resize:none" rows="5" type="password" name="description" class="form-control" id="exampleInputPassword1" placeholder="Mô tả danh mục"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Loại sản phẩm</label>
                            <select name="cate_id" class="form-control  input-lg m-bot15">
                                @foreach ($cate_product as $key => $cate)
                                <option value="{{ $cate ->id }}">{{ $cate->cate_name }}</option>
                                @endforeach


                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Sản phẩm nổi bật</label>
                            <select name="featured" class="form-control  input-lg m-bot15">

                                <option value="0">Sản phẩm thường</option>
                                <option value="1">Sản phẩm nổi bật</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Sản phẩm bán chạy</label>
                            <select name="best_seller" class="form-control  input-lg m-bot15">
                                <option value="0">loại 1</option>
                                <option value="1">loại 2</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hiển thị</label>
                            <select name="status" class="form-control  input-lg m-bot15">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiển thị</option>
                            </select>
                        </div>
                        <button type="submit" name="add_product" class="btn btn-info">Thêm sản phẩm</button>
                    </form>
                    </div>

                </div>
            </section>
    </div>
</div>

@endsection
