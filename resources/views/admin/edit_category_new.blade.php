@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật loại tin
                </header>
                <?php
                        $message = Session::get('message');
                        if($message){
                            echo '<span class="text-alert">'.$message.'</span>';
                            Session::put('message',null);
                        }
                    ?>
                <div class="panel-body">
                    @foreach ($edit_category_new as $key => $edit_value)
                    <div class="position-center">

                        <form role="form" action="{{ URL::to('/update-category-new/'.$edit_value->id_cate) }}" method="post">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text" value="{{ $edit_value->name }}" name="name" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả danh mục</label>
                            <textarea style="resize:none" rows="5" type="password" name="description" class="form-control" id="exampleInputPassword1" >{{ $edit_value->description }}</textarea>
                        </div>

                        <button type="submit" name="update_category_new" class="btn btn-info">Cập nhật loại tin</button>
                    </form>


                    </div>
                    @endforeach
                </div>
            </section>
    </div>
</div>

@endsection
