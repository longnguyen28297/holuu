@extends('admin.layouts.index')
@section('adminCont')
<h5 class="text-center">Thêm thẻ</h5>
@if (count($errors)>0)
      @foreach ($errors->all() as $error)
	<div class="alert alert-danger" role="alert">
	<strong>{{$error}}</strong>
	</div>					
      @endforeach
@endif

<form action="" method="post" enctype="multipart/form-data">
	<label for="title">Tên thẻ</label>
	<input class="form-control" type="text" value="@if(isset($name)){{$name}}@endif" name="name" id="name" maxlength="300" >
	<br><label for="">Trạng thái: &nbsp;</label><br>
	<input type="checkbox" @if(isset($status_menu)&&$status_menu==1){{'checked'}}@endif name="status_menu" id="status_menu"><label for="status_menu">&nbsp;Hiển thị trên menu</label>
	<br>
	<input type="checkbox" @if(isset($status_menu)&&$status_menu==1){{'checked'}}@endif name="status_home" id="status_home"><label for="status_home">&nbsp;Hiển thị trên trang chủ</label><br>
	<label for="">Loại thẻ:</label><br>
	<input type="checkbox" @if(isset($type)&&$type!=''){{'checked'}}@endif name="type" id="type"><label for="type">&nbsp;Thư viện</label><br>
	<input type="hidden" id="token" name="_token" value="{{csrf_token()}}">
	<button type="submit" name="add">Thêm</button>
</form>
<br>
@stop()

