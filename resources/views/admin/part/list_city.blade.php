@extends('admin.layouts.index')
@section('adminCont')
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
  Danh sách thành phố</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered tbl_content" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Tên thành phố</th>
            <th>Số bài viết</th>
            <th></th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Tên thành phố</th>
            <th>Số bài viết</th>
            <th></th>
          </tr>
        </tfoot>
        <tbody>
         @foreach($list_city as $city)
         <tr>
          <td>{{$city->name}}</td>
          <td>{{$city->count_topic}}</td>
          <td><a class="btn btn-info" href="{{asset('admin/edit_city')}}/{{$city->slug}}">Sửa</a>&nbsp; <a class="btn btn-danger" href="{{asset('admin/del_city')}}/{{$city->id}}" onclick=" confirm('Bạn có chắc chắn muốn xóa'); return true">Xóa</a></td>
        </tr>
        @endforeach
</tbody>
    </table>
  </div>
</div>
</div>
@stop()