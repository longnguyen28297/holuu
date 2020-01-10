@extends('admin.layouts.index')
@section('adminCont')
<!-- Breadcrumbs-->

<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
  Danh sách hình ảnh</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered tbl_content" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Ảnh</th>
            <th>Trạng thái</th>
            <th>Ngày tạo</th>
            <th></th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Ảnh</th>
            <th>Trạng thái</th>
            <th>Ngày tạo</th>
            <th></th>
          </tr>
        </tfoot>
        <tbody>
         @foreach($list_images as $image)
         <tr>
          <td><img src="{{asset('images')}}/{{$image->name}}" id="img_old" alt="" width="100"></td>
          <td>
             @if($image->status==1)
            {{'Hiển thị'}}
            @else
            {{'Ẩn'}}
            @endif
          </td>
          <td>{{$image->created_at}}</td>
          <td><a href="{{asset('admin/edit_images')}}/{{$image->id}}">@if($image->status==1)
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
</div>
@stop()