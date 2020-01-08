@extends('admin.layouts.index')
@section('adminCont')
<!-- Breadcrumbs-->

<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
  Danh sách video</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered tbl_content" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Video</th>
            <th>Tiêu đề</th>
            <th>Trạng thái</th>
            <th>Ngày tạo</th>
            <th>Sửa</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Video</th>
            <th>Tiêu đề</th>
            <th>Trạng thái</th>
            <th>Ngày tạo</th>
            <th></th>
          </tr>
        </tfoot>
        <tbody>
         @foreach($list_videos as $video)
         <tr>
          <td>
            <video width="320" height="240" controls>
            <source src="{{asset('public/videos')}}/{{$video->video}}" type="video/mp4">
          Your browser does not support the video tag.
          </video>
          </td>
          <td>{{$video->name}}</td>
          <td>
             @if($video->status==1)
            {{'Hiển thị'}}
            @else
            {{'Ẩn'}}
            @endif
          </td>
          <td>{{$video->created_at}}</td>
          <td><a href="./admin/edit_videos/{{$video->id}}">@if($video->status==1)
            {{'Ẩn'}}
            @else
            {{'Hiển thị'}}
            @endif</a></td>
        </tr>
        @endforeach
</tbody>
    </table>
  </div>
</div>
<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
@stop()