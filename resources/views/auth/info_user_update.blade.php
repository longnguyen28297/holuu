@extends('admin.layouts.index')

@section('adminCont')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if(isset($info_user)&&$info_user!='')
                <div class="card-header">{{ __('Thông tin tài khoản') }}</div>
                <div class="card-body">
                        <form method="POST" action="">
                        @csrf
                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Họ và tên') }}</label>

                            <div class="col-md-6">
                                <input value="@if(isset($name)&&$name!=''){{$name}}@else{{$info_user->name}}@endif" id="name" type="text" class="form-control  @if($errors->has('name')) is-invalid @endif" name="name"  required autocomplete="name" autofocus>

                                @if($errors->has('name'))
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{$errors->first('name')}}</strong>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Địa chỉ E-Mail') }}</label>

                            <div class="col-md-6">
                                <input value="@if(isset($email)&&$email!=''){{$email}}@else{{$info_user->email}}@endif" id="email" type="email" class="form-control  @if($errors->has('email'))is-invalid @endif" name="email"  required autocomplete="email">

                                @if($errors->has('email'))
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{$errors->first('email')}}</strong>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Cập nhật') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
