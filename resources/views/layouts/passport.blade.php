<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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

        .logo {
            font-weight: bold;
            font-family: serif;
        }

        .passport-form {
            /*固定宽度然后使用 mx-auto*/
            width: 300px;
            margin-top: 100px;
        }
        .passport-form>form>div>input {
            border: transparent;
        }
        .auth-btn {
            padding: 5px 13px;
            color: #444;
            background-color: #ffffff;
            border:transparent;
            border-radius: 2px;
            font-size: 14px;
            font-weight: bold;
        }
        .auth-btn:hover {
            color: #444;
            background-color: #ffffff;
            text-decoration: none;
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
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>