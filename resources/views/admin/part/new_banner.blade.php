@extends('admin.layouts.index')
@section('adminCont')
<h5 class="alert alert-info text-center">@if(isset($title)&&$title!=''){{$title}}@endif</h5>
<form class="text-center" action="" method="post" enctype="multipart/form-data">
	<br>
	@if(isset($banner_edit)&&$banner_edit!='')
	<label for="banner">Ảnh hiện tại</label><br>
	<img src="{{asset('images')}}/{{$banner_edit->images}}" id="img_old" alt="" width="50%" >
	<br><br>
	<label for="images">Chọn ảnh mới</label>
	@else
	<label for="images">Chưa có ảnh</label>
	@endif
	<br>
	<input type="file" id="images" name="images"><br><br>
	<input type="hidden" id="token" name="_token" value="{{csrf_token()}}">
	<button type="submit" class="btn btn-success" name="add">@if(isset($banner_edit)&&$banner_edit!=''){{'Cập nhật'}}@else{{'Thêm'}}@endif</button>
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
