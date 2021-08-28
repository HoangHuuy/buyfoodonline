<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {

                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .nav > a:hover {
                border-bottom: 2px solid red;
            }

            #al-login {
                text-transform: none;
                color: rgba(0, 0, 0, 0.5);
            }

            #al-login:hover {
                color: #636b6f;
            }

            .m-b-md {
                margin-top: 100px;
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a id="al-login" href="{{ url('/home') }}">{{ Auth::user()->name }}</a>
                    @else
                        <a href="{{ route('login') }}">Đăng nhập</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Đăng kí</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    KHTL
                </div>

                <div class="links nav">
                    <a href="http://127.0.0.1:8000/do-an">Đồ Ăn</a>
                    <a href="http://127.0.0.1:8000/com">Cơm</a>
                    <a href="http://127.0.0.1:8000/chao">Cháo</a>
                    <a href="http://127.0.0.1:8000/pho">Phở</a>
                    <a href="http://127.0.0.1:8000/do-an-vat">Đồ Ăn Vặt</a>
                    <a href="http://127.0.0.1:8000/giai-khat">Giải Khát</a>
                </div>
            </div>
        </div>
    </body>
</html>
