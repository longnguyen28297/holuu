@extends('admin.layouts.index')
@section('adminCont')
<!-- Breadcrumbs-->

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
            <th>Tên</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Email</th>
            <th>Fax</th>
            <th>Trạng thái</th>
            <th>Ngày tạo</th>
            <th>Sửa</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Tên</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Email</th>
            <th>Fax</th>
            <th>Trạng thái</th>
            <th>Ngày tạo</th>
            <th>Sửa</th>
          </tr>
        </tfoot>
        <tbody>
         @foreach($list_info as $info)
         <tr>
          <td>{{$info->name}}</td>
          <td>{{$info->address}}</td>
          <td>{{$info->phone}}</td>
          <td>{{$info->email}}</td>
          <td>{{$info->fax}}</td>
          <td>
             @if($info->status==1)
            {{'Hiển thị'}}
            @else
            {{'Ẩn - '}} <a href="{{asset('admin/show_info')}}/{{$info->id}}">Hiển thị</a>
            @endif
          </td>
          <td>{{$info->created_at}}</td>
          <td>
            <a href="{{asset('admin/edit_info')}}/{{$info->slug}}">Sửa</a> - <a href="{{asset('admin/delete_info')}}/{{$info->id}}" onclick=" confirm('Bạn có chắc chắn muốn xóa'); return true">Xóa</a>
          </td>
        </tr>
        @endforeach
</tbody>
    </table>
  </div>
</div>
</div>
@stop()