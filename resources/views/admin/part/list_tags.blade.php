@extends('admin.layouts.index')
@section('adminCont')
<!-- Breadcrumbs-->
@if (count($errors)>0)
  <div class="alert alert-danger" role="alert">
  <strong>{{$errors->first()}}</strong>
  </div>
@endif
@if(session('success'))
<div class="alert alert-success" role="alert">
  <strong>{{session('success')}}</strong>
  </div>
@endif
<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
  Danh sách thẻ</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered tbl_content" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Tên thẻ</th>
            <th>Hiển thị trên menu</th>
            <th>Hiển thị trên trang chủ</th>
            <th>Loại thẻ</th>
            <th>Sửa</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Tên thẻ</th>
            <th>Hiển thị trên menu</th>
            <th>Hiển thị trên trang chủ</th>
            <th>Loại thẻ</th>
            <th>Sửa</th>
          </tr>
        </tfoot>
        <tbody>
         @foreach($list_tags as $tag)
         <tr>
          <td>{{$tag->name}}</td>
          <td>@if($tag->status_menu==1)
            {{'Có'}}
            @else
            {{'Không'}}
            @endif
          </td>
          <td>@if($tag->status_home==1)
            {{'Có'}}
            @else
            {{'Không'}}
            @endif
          </td>
          <td>
            @if($tag->type==1)
            {{'Thư viện'}}
            @else
            {{'Danh sách'}}
            @endif
          </td>
          <td><a class="btn btn-info" href="{{asset('admin/edit_tags')}}/{{$tag->slug}}">Sửa</a>  <a class="btn btn-danger" href="{{asset('admin/delete_tags')}}/{{$tag->slug}}" onclick="return deleteTags()">Xóa</a></td>
        </tr>
        @endforeach
</tbody>
    </table>
  </div>
</div>
</div>
<script>
  function deleteTags() {
    // body...
    yes = prompt('Nhập "yes" nếu chắc chắn xóa thẻ và tất cả đầu mục và bài viết thuộc thẻ này');
    if (yes=='yes') {
      return true;
    }else{
      return false;
    }
}
</script>
@stop()