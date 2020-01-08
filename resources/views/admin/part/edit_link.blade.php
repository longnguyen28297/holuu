@extends('admin.layouts.index')
@section('adminCont')
<h5 class="text-center">Chỉnh sửa liên kết</h5>
<form action="" method="post" enctype="multipart/form-data">
	<label for="title">Tiêu đề</label>
	<input class="form-control" type="text" value="@if(isset($name)){{$name}}@else{{$link_old->title}}@endif" name="name" id="name" maxlength="255" >
	<label for="link">Liên kết</label>
	<input class="form-control" type="text" value="@if(isset($link)){{$link}}@else{{$link_old->link}}@endif" name="link" id="link" maxlength="255" >
	<label for="status">Trạng thái: &nbsp;</label>
	<input type="checkbox" @if(isset($status)&&$status==1){{'checked'}}@elseif($link_old->status==1){{'checked'}}@endif name="status" id="status"><label for="">&nbsp;Hiển thị</label>
	<br>
	<br>
	<input type="hidden" id="token" name="_token" value="{{csrf_token()}}">
	<button type="submit" class="btn btn-dark" name="add">Thêm</button>
</form>
<br>
@if (count($errors)>0)
      @foreach ($errors->all() as $error)
	<div class="alert alert-danger" role="alert">
	<strong>{{$error}}</strong>
	</div>					
      @endforeach
@endif
@stop()
