<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>zhihu</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body, html {
            background: url('http://cn.bing.com/az/hprichbg/rb/RotenbergVineyards_ZH-CN11483766655_1920x1080.jpg') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
        }

        .auth-header a{
            color: #444444;
            text-decoration: none;
            background-color: #FFFFFF;
            padding: 5px 13px;
            font-size: 14px;
            font-weight: bold;
            border-style: none;
            border-radius: 3px;
        }
        .auth-header a:hover {
            color: #444444;
            background-color: #FFFFFF;
        }

        .logo {
            font-weight: bold;
            font-family: serif;
        }

        .auth-form {
            /*固定宽度然后使用 mx-auto*/
            width: 300px;
            margin-top: 100px;
        }
        .auth-form>div>input {
            border: transparent;
        }
        .password-reset {
            color: #ffffff;
        }
        .password-reset:hover {
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div id="app">
        <div class="auth-header text-right mt-3 mr-4">
            @if (Route::currentRouteName() === 'login')
                <a href="{{ route('register') }}">注册</a>
            @else
                <a href="{{ route('login') }}">登录</a>
            @endif
        </div>
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>