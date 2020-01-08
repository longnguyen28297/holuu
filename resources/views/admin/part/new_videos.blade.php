@extends('admin.layouts.index')
@section('adminCont')
<h5 class="text-center">Thêm video</h5>


<form action="" method="post" enctype="multipart/form-data">
	<label for="title">Tiêu đề</label>
	<input value="@if(isset($title)){{$title}}@endif" class="form-control" type="text" name="title" id="title" maxlength="255" >
	<label for="index">Đầu mục</label>
	<select class="form-control" name="index" id="index">
		@foreach ($list_indexing as $indexing)
		<option @if(isset($index)&&$index==$indexing->id){{'selected'}}@endif value="{{$indexing->id}}">{{$indexing->name}}</option>
		@endforeach
	</select>
	<label for="images">Tải lên video</label>
	<input type="file" id="video" name="video"><br>
	<label for="status">Trạng thái: &nbsp;</label>
	<input type="checkbox" @if(isset($status)&&$status!=''){{'checked'}}@endif name="status" id="status"><label for="">&nbsp;Hiển thị</label>
	
	<br>
	<input type="hidden" id="token" name="_token" value="{{csrf_token()}}">
	<button type="submit" class="btn btn-dark" name="add">Thêm</button>
</form>
@if (count($errors)>0)
      @foreach ($errors->all() as $error)
	<div class="alert alert-danger" role="alert">
	<strong>{{$error}}</strong>
	</div>					
      @endforeach
@endif
@stop()
