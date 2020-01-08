@extends('admin.layouts.index')
@section('adminCont')
<h5 class="text-center">Thêm đầu mục mới</h5>
<form action="" method="post" enctype="multipart/form-data">
	<label for="title">Tên đầu mục</label>
	<input class="form-control" type="text" value="@if(isset($name)){{$name}}@endif" name="name" id="name" maxlength="255" >
	<label for="index">Thẻ</label>
	<select class="form-control" name="tags" id="tags">
		<option value="">-Chọn thẻ-</option>
		@foreach ($list_tags as $tags_element)
		<option @if(isset($tags)&&$tags==$tags_element->id){{'selected'}}@endif  value="{{$tags_element->id}}">{{$tags_element->name}}</option>
		@endforeach
	</select>
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
