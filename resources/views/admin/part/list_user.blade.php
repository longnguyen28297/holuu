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
  Danh sách tài khoản</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered tbl_content" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Tên</th>
            <th>Email</th>
            <th>Vai trò</th>
            <th>Ngày tạo</th>
            <th>Trạng thái</th>
            <th></th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Tên</th>
            <th>Email</th>
            <th>Vai trò</th>
            <th>Ngày tạo</th>
            <th>Trạng thái</th>
            <th></th>
          </tr>
        </tfoot>
        <tbody>
         @foreach($list_admin as $acc)
         <tr>
          <td>{{$acc->name}}</td>
          <td>
            {{$acc->email}}
          </td>
          <td>
            @if($acc->role==1)
            {{'Quản trị viên'}}
            @else
            {{'Cộng tác viên'}}
            @endif
          </td>
          <td>{{$acc->created_at}}</td>
          <td>@if($acc->status==0)
            <p class=""><i class="fas fa-circle text-warning"></i> Khóa</p><a class="btn btn-success" href="{{asset('admin/unlock')}}/{{$acc->id}}" onclick="return unlockUser()">Mở khóa
            </a>
            @elseif($acc->status==1)
            <p><i class="fas fa-circle text-success"></i> Hoạt động</p><a class="btn btn-warning" href="{{asset('admin/lock')}}/{{$acc->id}}" onclick="return lockUser();">Khóa
            </a>
            @endif</td>
          <td>
            
            <a class="btn btn-danger" href="{{asset('admin/deleteUser')}}/{{$acc->id}}" onclick="return deleteUser()">Xóa
            </a>
          </td>
        </tr>
        @endforeach
</tbody>
    </table>
  </div>
</div>
</div>
<script>
  function lockUser() {
    // body...
    yes = prompt('Nhập "yes" nếu chắc chắn muốn khóa tài khoản này');
    if (yes=='yes') {
      return true;
    }else{
      return false;
    }
}
  function unlockUser() {
    // body...
    yes = prompt('Nhập "yes" nếu chắc chắn muốn mở khóa tài khoản này');
    if (yes=='yes') {
      return true;
    }else{
      return false;
    }
}
  function deleteUser() {
    // body...
    yes = prompt('Nhập "yes" nếu chắc chắn xóa tài khoản này');
    if (yes=='yes') {
      return true;
    }else{
      return false;
    }
}
</script>
@stop()