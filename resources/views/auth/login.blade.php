@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <form class="auth-form" action="{{ route('login') }}" method="POST">
                {{ csrf_field() }}

                <div class="logo display-4 mb-3 text-center text-white">zhihu.</div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="电子邮箱" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="password" placeholder="密码" required>
                </div>
                <div class="form-group">
                    <button type="submit" style="cursor: pointer;" class="btn btn-primary btn-block">登录</button>
                </div>
                <div class="form-group text-center">
                    <a href="{{ route('password.request') }}" class="password-reset">忘记密码？</a>
                </div>
            </form>
        </div>
    </div>
@endsection