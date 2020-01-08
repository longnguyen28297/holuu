@extends('admin.layouts.index')
@section('adminCont')
<h5 class="text-center">Sửa bài viêt</h5>

@if (count($errors)>0)
      @foreach ($errors->all() as $error)
	<div class="alert alert-danger" role="alert">
	<strong>{{$error}}</strong>
	</div>					
@endforeach
@endif
<form action="" method="post" enctype="multipart/form-data">
	<label for="title">Tiêu đề</label>
	<input class="form-control" type="text" name="title" id="title" maxlength="300" value="@if(isset($title)){{$title}}@else{{$topic_old->title}}@endif">
	<label for="summary">Tóm tắt</label>
	<input class="form-control" type="text" name="summary" id="summary" maxlength="300" value="@if(isset($summary)){{$summary}}@else{{$topic_old->summary}}@endif">
	<label for="index">Đầu mục</label>
	<select class="form-control" name="index" id="index">
		@foreach ($list_indexing as $indexing)
		<option @if($topic_old->indexing==$indexing->id){{'selected'}}@endif value="{{$indexing->id}}">{{$indexing->name}}</option>
		@endforeach
	</select>
	<label for="city">Thành phố</label>
	<select class="form-control" name="city" id="city">
		@foreach ($list_city as $city)
		<option @if($topic_old->city==$city->id){{'selected'}}@endif value="{{$city->id}}">{{$city->name}}</option>
		@endforeach
	</select>
	<br>
	<label for="images">Ảnh đại diện</label>
	<input type="file" id="images" name="images">
	<br>
	<label for="img_old">Ảnh hiện tại</label>
	<img src="{{asset('public/images')}}/{{$topic_old->images}}" id="img_old" alt="" width="100">
	<br>
	<label for="title">Từ khóa (mỗi từ khóa cách nhau bởi dấu ',')</label>
	<input class="form-control" type="text" value="@if(isset($keyword)){{$keyword}}@else{{$topic_old->keyword}}@endif" name="keyword" id="keyword" maxlength="255" >
	<br>
	<label for="content">Nội dung</label>
	<textarea name="content" class="ckeditor" id="editor">@if(isset($content)){{$content}}@else{{$topic_old->content}}@endif</textarea>
	
	<script>
    CKEditor.replace('editor');
	</script>
	<label for="status">Trạng thái: &nbsp;</label>
	<input type="checkbox" @if(isset($status)&&$status==1){{'checked'}}@elseif($topic_old->status==1){{'checked'}}@endif name="status" id="status"><label for="">&nbsp;Hiển thị</label>
	<br>
	<br>
	<input type="hidden" id="token" name="_token" value="{{csrf_token()}}">
	<button type="submit" name="add">Cập nhật</button>
</form>

@stop()
