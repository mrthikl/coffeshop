@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm tin tức
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
                        <form role="form" action="{{ URL::to('/save-news') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tiêu đề</label>
                            <input type="text" name="title" class="form-control" id="exampleInputEmail1" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tóm tắt</label>
                            <textarea style="resize:none" rows="2" type="password" name="short_content" class="form-control" id="exampleInputPassword1" ></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nội dung</label>
                            <textarea style="resize:none" rows="5" type="password" name="content" class="form-control" id="exampleInputPassword1" ></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình 1</label>
                            <input type="file" name="img1" class="form-control" id="exampleInputEmail1" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình 2</label>
                            <input type="file" name="img2" class="form-control" id="exampleInputEmail1" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình 3</label>
                            <input type="file" name="img3" class="form-control" id="exampleInputEmail1" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Loại tin tức</label>
                            <select name="cate_id" class="form-control  input-lg m-bot15">
                                @foreach ($cate_new as $key => $cate)
                                <option value="{{ $cate ->id_cate }}">{{ $cate->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hiển thị</label>
                            <select name="status_news" class="form-control  input-lg m-bot15">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiển thị</option>
                            </select>
                        </div>
                        <button type="submit" name="save_news" class="btn btn-info">Thêm tin tức</button>
                    </form>
                    </div>

                </div>
            </section>
    </div>
</div>

@endsection
