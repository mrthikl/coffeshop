@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật mục sản phẩm
                </header>
                <?php
                        $message = Session::get('message');
                        if($message){
                            echo '<span class="text-alert">'.$message.'</span>';
                            Session::put('message',null);
                        }
                    ?>
                <div class="panel-body">
                    @foreach ($edit_category_product as $key => $edit_value)
                    <div class="position-center">

                        <form role="form" action="{{ URL::to('/update-category-product/'.$edit_value->id) }}" method="post">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text" value="{{ $edit_value->cate_name }}" name="cate_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả danh mục</label>
                            <textarea style="resize:none" rows="5" type="password" name="cate_desc" class="form-control" id="exampleInputPassword1" placeholder="Mô tả danh mục">{{ $edit_value->cate_desc }}</textarea>
                        </div>

                        <button type="submit" name="update_category_product" class="btn btn-info">Cập nhật danh mục</button>
                    </form>


                    </div>
                    @endforeach
                </div>
            </section>
    </div>
</div>

@endsection