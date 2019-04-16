<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    <!-- Styles -->
    <style>

        html, body {
            background-image: url("images/faq2.jpg");
            color: #000000;
            font-family: 'Nunito', sans-serif;
            font-weight: 300;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 60vh;
        }

        .flex-center {
            align-items: center;
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
            font-size: 50px;
        }

        .links > a {
            color: #fdfdfe;
            padding: 0 25px;
            font-size: 26px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}"><b>Home</b></a>
            @else
                <a href="{{ route('login') }}"><b>Login</b></a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"><b>Register</b></a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            <b>Final Project - IS601</b>
            <br>
            <b>by Hari Hara Sudaan Krishnen</b>
            <br>
            <b><i>UCID: hk444</i></b>
        </div>

    </div>
</div>
</body>
</html>
