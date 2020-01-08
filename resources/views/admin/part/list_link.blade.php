@extends('admin.layouts.index')
@section('adminCont')
<!-- Breadcrumbs-->

<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
  Danh sách tên đầu mục</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered tbl_content" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Tiêu đề</th>
            <th>Link</th>
            <th>Trạng thái</th>
            <th>Ngày tạo</th>
            <th></th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Tiêu đề</th>
            <th>Link</th>
            <th>Trạng thái</th>
            <th>Ngày tạo</th>
            <th></th>
          </tr>
        </tfoot>
        <tbody>
         @foreach($list_link as $link)
         <tr>
          <td>{{$link->title}}</td>
          <td>
            {{$link->link}}
          </td>
          <td>
             @if($link->status==1)
            {{'Hiển thị'}}
            @else
            {{'Ẩn'}}
            @endif
          </td>
          <td>{{$link->created_at}}</td>
          <td><a href="{{asset('admin/edit_link')}}/{{$link->slug}}">Sửa</a> - <a href="{{asset('admin/delete_link')}}/{{$link->id}}" onclick=" confirm('Bạn có chắc chắn muốn xóa'); return true">Xóa</a></td>
        </tr>
        @endforeach






      </tbody>
    </table>
  </div>
</div>
</div>
@stop()