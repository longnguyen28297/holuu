@extends('admin.layouts.index')
@section('adminCont')
<h5 class="text-center">Chỉnh sửa thông tin liên hệ</h5>
<form action="" method="post" enctype="multipart/form-data">
	<label for="title">Tên liên hệ</label>
	<input class="form-control" type="text" value="@if(isset($name)){{$name}}@else{{$info_old->name}}@endif" required name="name" id="name" maxlength="300" ><br>
	<label for="title">Địa chỉ</label>
	<input class="form-control" type="text" value="@if(isset($address)){{$address}}@else{{$info_old->address}}@endif" required name="address" id="address" maxlength="500" ><br>
	<label for="title">Số điện thoại</label>
	<input class="form-control" type="text" value="@if(isset($phone)){{$phone}}@else{{$info_old->phone}}@endif" required name="phone" id="phone" maxlength="15" ><br>
	<label for="title">Email</label>
	<input class="form-control" type="email" value="@if(isset($email)){{$email}}@else{{$info_old->email}}@endif" required name="email" id="email" maxlength="500" ><br>
	<label for="title">Fax</label>
	<input class="form-control" type="text" value="@if(isset($fax)){{$fax}}@else{{$info_old->fax}}@endif" required name="fax" id="fax" maxlength="20" ><br>
	<label class="btn btn-info" for="images">Logo</label><br>
	<label for="">Logo hiện tại</label><br>
	<img width="100" src="{{asset('public/images/logo')}}/{{$info_old->logo}}" alt=""><br>
	<label for="">Chọn logo mới</label><br>
	<input type="file" id="images" name="images"><br>
	<br>
	<label for="content">Giới thiệu</label>
	<textarea name="content" class="ckeditor" id="editor">@if(isset($content)){{$content}}@else{{$info_old->content}}@endif</textarea>
	
	<script>
    CKEditor.replace('editor');
	</script>
	<br>
	<input type="hidden" id="token" name="_token" value="{{csrf_token()}}">
	<button type="submit" class="btn btn-dark" name="add">Cập nhật</button>
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
