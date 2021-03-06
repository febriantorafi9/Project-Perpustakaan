<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ruang Baca Pras dan Rafi</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url("../img/perpus3.jpg");
                background-repeat: no-repeat;
                background-size: cover;
                color: white;
                /*background-color: #111C29;*/
                color: white;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
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

            .loginbody 
            {
                
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 13px;
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
                        <a href="{{ url('/home1') }}">Home</a>
                    @else
                        <a href="{{ url('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ url('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Selamat datang di web Ruang Baca Pras dan Rafi
                </div>

                <div class="display-1">
                        Meet our creator :
                </div>

                <div class="links">
                    <a href="https://www.instagram.com/febriantorafn9/">Instagram Rafi</a>
                    <a href="https://www.instagram.com/prasaja_mn/">Instagram Pras</a>
                </div>
            </div>
        </div>
    </body>
</html>
