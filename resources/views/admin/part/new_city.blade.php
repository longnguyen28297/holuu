@extends('admin.layouts.index')
@section('adminCont')
<h5 class="text-center">Thêm thành phố</h5>
<form action="" method="post" enctype="multipart/form-data">
	<label for="title">Tên thành phố</label>
	<input class="form-control" type="text" value="@if(isset($name)){{$name}}@endif" name="name" id="name" maxlength="300" >
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
