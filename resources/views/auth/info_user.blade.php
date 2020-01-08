@extends('admin.layouts.index')

@section('adminCont')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if(isset($info_user)&&$info_user!='')
                <div class="card-header">{{ __('Thông tin tài khoản') }}</div>
                <div class="card-body">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Họ và tên') }}</label>

                            <div class="col-md-6">
                                <input value="{{$info_user->name}}" readonly  type="text" class="form-control" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Địa chỉ E-Mail') }}</label>

                            <div class="col-md-6">
                                <input readonly value="{{$info_user->email}}"  type="email" class="form-control" required autocomplete="email">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mật khẩu') }}</label>

                            <div class="col-md-6">
                                <input id="password" value="******" readonly type="password" class="form-control" name="password" required autocomplete="new-password">

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a class="btn btn-info" href="{{asset('admin/infoUserUpdate')}}">Cập nhật thông tin</a>&nbsp;<a class="btn btn-info" href="{{asset('admin/changePassword')}}">Đổi mật khẩu</a>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
