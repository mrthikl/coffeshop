@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm loại tin
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
                        <form role="form" action="{{ URL::to('/save-category-new') }}" method="post">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên loại tin</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả loại tin</label>
                            <textarea style="resize:none" rows="5" type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="Mô tả danh mục"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hiển thị</label>
                            <select name="status" class="form-control  input-lg m-bot15">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiển thị</option>
                            </select>
                        </div>
                        <button type="submit" name="add_category_new" class="btn btn-info">Thêm loại tin</button>
                    </form>
                    </div>

                </div>
            </section>
    </div>
</div>

@endsection
