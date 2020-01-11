@extends('admin.layouts.index')
@section('adminCont')
<h5 class="text-center">Thêm thông tin liên hệ</h5>
@if (count($errors)>0)
      @foreach ($errors->all() as $error)
	<div class="alert alert-danger" role="alert">
	<strong>{{$error}}</strong>
	</div>					
      @endforeach
@endif
<form action="" method="post" enctype="multipart/form-data">

	<label for="title">Tên liên hệ</label>
	<input class="form-control" type="text" value="@if(isset($name)){{$name}}@endif" required name="name" id="name" maxlength="300" ><br>
	<label for="title">Địa chỉ</label>
	<input class="form-control" type="text" value="@if(isset($address)){{$address}}@endif" required name="address" id="address" maxlength="500" ><br>
	<label for="title">Số điện thoại</label>
	<input class="form-control" type="text" value="@if(isset($phone)){{$phone}}@endif" required name="phone" id="phone" maxlength="15" ><br>
	<label for="title">Email</label>
	<input class="form-control" type="email" value="@if(isset($email)){{$email}}@endif" required name="email" id="email" maxlength="500" ><br>
	<label for="title">Fax</label>
	<input class="form-control" type="text" value="@if(isset($fax)){{$fax}}@endif" required name="fax" id="fax" maxlength="20" ><br><label for="facebook">Link facebook fanpage</label>
	<input class="form-control" type="text" value="@if(isset($facebook)){{$facebook}}@endif" name="facebook" id="facebook" maxlength="255" ><br>
	<label for="images">Logo</label>
	<input type="file" id="images" name="images"><br>
	<br>
	<label for="content">Giới thiệu</label>
	<textarea name="content" class="ckeditor" id="editor">@if(isset($content)){{$content}}@endif</textarea>
	
	<script>
    CKEditor.replace('editor');
	</script>
	<br>
	<input type="hidden" id="token" name="_token" value="{{csrf_token()}}">
	<button type="submit" class="btn btn-dark" name="add">Thêm</button>
</form>
<br>

@stop()
