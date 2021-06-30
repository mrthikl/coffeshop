@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
        Danh sách tin tức
      </div>
      <div class="row w3-res-tb">
        <div class="col-sm-5 m-b-xs">
          <select class="input-sm form-control w-sm inline v-middle">
            <option value="0">Bulk action</option>
            <option value="1">Delete selected</option>
            <option value="2">Bulk edit</option>
            <option value="3">Export</option>
          </select>
          <button class="btn btn-sm btn-default">Apply</button>
        </div>
        <div class="col-sm-4">
        </div>
        <div class="col-sm-3">
          <div class="input-group">
            <input type="text" class="input-sm form-control" placeholder="Search">
            <span class="input-group-btn">
              <button class="btn btn-sm btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <?php
        $message = Session::get('message');
        if($message){
            echo '<span class="text-alert">'.$message.'</span>';
            Session::put('message',null);
        }
        ?>
        <table class="table table-striped b-t b-light">
          <thead>
            <tr>
              <th style="width:20px;">
                <label class="i-checks m-b-none">
                  <input type="checkbox"><i></i>
                </label>
              </th>
              <th>Tiêu đề</th>
              <th>Tóm tắt</th>
              <th>Nội dung</th>
              <th>Hình</th>
              <th>Loại tin</th>
              <th>Hiển thị</th>
              <th style="width:30px;"></th>

            </tr>
          </thead>
          <tbody>
              @foreach ($all_news as $key => $tintuc)
              <tr>
                <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                <td>{{ $tintuc->title }}</td>
                <td>{{ $tintuc->short_content }} </td>
                <td>{{ $tintuc->content }} </td>
                <td><img src="public/uploads/news/{{ $tintuc->img1 }}" height="100" width="100" alt=""></td>
                <td>{{ $tintuc->name }}</td>
                <td>
                    <span class="text-ellipsis">
                    <?php
                        if($tintuc->status_news==0){
                            ?>
                            <a href="{{ URL::to('/unactive-news/'.$tintuc->id_news) }}"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                        <?php
                        }else{
                        ?>
                           <a  href="{{ URL::to('/active-news/'.$tintuc->id_news) }}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
                        <?php
                        }

                    ?>
                    </span>
                </td>
                {{-- <td><span class="text-ellipsis">12.5.2020</span></td> --}}
                <td>
                  <a href="{{ URL::to('/edit-news/'.$tintuc->id_news) }}" class="styling-edit active" ui-toggle-class="">
                      <i class="fa fa-pencil-square-o text-success text-active"></i>
                  </a>
                    <a onclick="return confirm('Bạn có chắc muốn xóa tin tức này?')" href="{{ URL::to('/delete-news/'.$tintuc->id_news) }}" class="styling-edit active" ui-toggle-class="">
                      <i class="fa fa-times text-danger text"></i>
                    </a>
                </td>
              </tr>
              @endforeach


          </tbody>
        </table>
      </div>
      <footer class="panel-footer">
        <div class="row">

          <div class="col-sm-5 text-center">
            <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
          </div>
          <div class="col-sm-7 text-right text-center-xs">
            <ul class="pagination pagination-sm m-t-none m-b-none">
              <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
              <li><a href="">1</a></li>
              <li><a href="">2</a></li>
              <li><a href="">3</a></li>
              <li><a href="">4</a></li>
              <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>

@endsection
