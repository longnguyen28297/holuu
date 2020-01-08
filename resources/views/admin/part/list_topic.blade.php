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
  Danh sách bài viết</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered tbl_content" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Tiêu đề</th>
            <th>Đầu mục</th>
            <th>Thành phố</th>
            <th>Tóm tắt</th>
            <th>Người viết</th>
            <th>Ảnh đại diện</th>
            <th>Nội dung</th>
            <th>Ngày viết</th>
            <th>Trạng thái</th>
            <th></th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Tiêu đề</th>
            <th>Đầu mục</th>
            <th>Thành phố</th>
            <th>Tóm tắt</th>
            <th>Người viết</th>
            <th>Ảnh đại diện</th>
            <th>Nội dung</th>
            <th>Ngày viết</th>
            <th>Trạng thái</th>
            <th></th>
          </tr>
        </tfoot>
        <tbody>
         @foreach($topic as $topic)
         <tr>
          <td>{{$topic->title}}</td>
          <td>
            <?php $index= DB::table('indexing')->where('id',$topic->id_index)->first(); ?> 
            {{$index->name}}
          </td>
          <td>
            <?php $city= DB::table('city')->where('id',$topic->id_city)->first(); ?> 
            {{$city->name}} 
          </td>
          <td>{{$topic->summary}}</td>
          <td><?php $creator= DB::table('users')->where('id',$topic->creator)->first(); ?> 
            {{$creator->name}} </td>
          <td><img src="{{asset('public/images')}}/{{$topic->images}}" id="img_old" alt="" width="100"></td>
          <td><a href="{{asset('admin/detail_content')}}/{{$topic->slug}}">Chi tiêt</a></td>
          <td>{{$topic->created_at}}</td>
          <td>
            @if($topic->censor==0)
            @can('admin')
            <a href="{{asset('admin/censor_topic')}}/{{$topic->slug}}" class="btn btn-success">Duyệt</a>
            @endcan
            @cannot('admin')
            {{'Chưa duyệt'}}
            @endcannot
            @elseif($topic->status==1)
            {{'Hiển thị'}}
            @else
            {{'Ẩn'}}
            @endif
          </td>
          <td>
            <a href="{{asset('admin/edit_topic')}}/{{$topic->slug}}" class="btn btn-info">Sửa</a> &nbsp;@can('admin') <a href="{{asset('admin/delete_topic')}}/{{$topic->slug}}" class="btn btn-danger" onclick=" confirm('Bạn có chắc chắn muốn xóa'); return true">Xóa</a>@endcan
          </td>
        </tr>
        @endforeach






      </tbody>
    </table>
  </div>
</div>
<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
@stop()