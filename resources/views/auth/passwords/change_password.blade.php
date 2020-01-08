@extends('admin.layouts.index')

@section('adminCont')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Đổi mật khẩu') }}</div>
                
                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mật khẩu cũ') }}</label>

                            <div class="col-md-6">
                                <input id="password_old" type="password" value="@if(isset($password_old)){{$password_old}}@endif" class="form-control @if($errors->has('password_old')) is-invalid @endif" name="password_old" required>
                                @if($errors->has('password_old'))
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{$errors->first('password_old')}}</strong>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mật khẩu mới') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" value="@if(isset($password)){{$password}}@endif" class="form-control @if($errors->has('password')) is-invalid @endif" name="password" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Xác nhận mật khẩu') }}</label>
                                
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control @if($errors->has('password')) is-invalid @endif" name="password_confirmation" value="@if(isset($password_confirmation)){{$password_confirmation}}@endif" required autocomplete="new-password">
                                <br>
                                @if($errors->has('password'))
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{$errors->first('password')}}</strong>
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
            </div>
        </div>
    </div>
</div>
@endsection
