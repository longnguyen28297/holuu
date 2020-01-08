@extends('admin.layouts.index')
@section('adminCont')
<h5 class="text-center">Thêm bài viêt</h5>
@if (count($errors)>0)
	<div class="alert alert-danger" role="alert">
	<strong>{{$errors->first()}}</strong>
	</div>
@endif
<form action="" method="post" enctype="multipart/form-data">
	<label for="title">Tiêu đề</label>
	<input class="form-control" type="text" value="@if(isset($title)){{$title}}@endif" name="title" id="title" maxlength="255" >
	<label for="summary">Tóm tắt</label>
	<input class="form-control" type="text" value="@if(isset($summary)){{$summary}}@endif" name="summary" id="summary" maxlength="255" >
	<label for="index">Đầu mục</label>
	<select class="form-control" name="index" id="index">
		@foreach ($list_indexing as $list_indexing)
		<option @if(isset($index)&&$index==$list_indexing->id){{'selected'}}@endif value="{{$list_indexing->id}}">{{$list_indexing->name}}</option>
		@endforeach
	</select>
	<label for="city">Thành phố</label>
	<select class="form-control" name="city" id="city">
		@foreach ($list_city as $list_city)
		<option @if(isset($city)&&$city==$list_city->id){{'selected'}}@endif value="{{$list_city->id}}">{{$list_city->name}}</option>
		@endforeach
	</select>
	<label for="images">Ảnh đại diện</label>
	<input type="file" id="images" name="images"><br>

	<label for="content">Nội dung</label>
	<textarea name="content" class="ckeditor" id="editor">@if(isset($content)){{$content}}@endif</textarea>
	<label for="title">Từ khóa (mỗi từ khóa cách nhau bởi dấu ',')</label>
	<input class="form-control" type="text" value="@if(isset($keyword)){{$keyword}}@endif" name="keyword" id="keyword" maxlength="255" >
	<script>
    CKEditor.replace('editor');
	</script>
	<label for="status">Trạng thái: &nbsp;</label>
	<input type="checkbox" @if(isset($status)&&$status==1){{'checked'}}@endif name="status" id="status"><label for="">&nbsp;Hiển thị</label>
	<br>
	<br>
	<input type="hidden" id="token" name="_token" value="{{csrf_token()}}">
	<button type="submit" class="btn btn-dark" name="add">Thêm</button>
</form>

@stop()
