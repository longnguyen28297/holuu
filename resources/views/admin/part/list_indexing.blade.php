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
            <th>Tên</th>
            <th>Thẻ</th>
            <th>Ngày tạo</th>
            <th></th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Tên</th>
            <th>Thẻ</th>
            <th>Ngày tạo</th>
            <th></th>
          </tr>
        </tfoot>
        <tbody>
         @foreach($list_indexing as $indexing)
         <tr>
          <td>{{$indexing->name}}</td>
          <td>
            <?php $tags= DB::table('tags')->where('id',$indexing->id_tags)->first(); ?> 
            {{$tags->name}}
          </td>
          <td>{{$indexing->created_at}}</td>
          <td><a href="{{asset('admin/edit_indexing')}}/{{$indexing->slug}}">Sửa</a> - <a href="{{asset('admin/delete_indexing')}}/{{$indexing->id}}" onclick=" confirm('Bạn có chắc chắn muốn xóa'); return true">Xóa</a></td>
        </tr>
        @endforeach






      </tbody>
    </table>
  </div>
</div>
</div>
@stop()