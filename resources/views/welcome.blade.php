<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
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
                         <!-- Right Side Of Navbar -->
                   
                   <div class="links"> <a href="{{ url('register/toggle') }}">@if(Cache::has('register-disabled'))Enable @else 
 Diasable @endif Registration</a> (<a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>)
                                     <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></div>
                           
                     
                   
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>

                        
                       

                        

                        
                    @endauth
                </div>
            @endif

            

            <div class="content">
                <div class="title m-b-md">
                @guest  Welcome!   @else Welcome {{ Auth::user()->name }}! @endguest<br>
                    <small style="font-size: 30px">What Page Would You Like to Update?</small>
                </div>

                <div class="links">
                    <a href="{{route('home.edit')}}">Home</a>
                    <a href="{{route('about.edit')}}">About Us</a>
                    <a href="{{route('procurement-supply.edit')}}">Procurement & Supply
</a>
                    <a href="{{route('operation-installation-maintenance.edit')}}">Operation, Installation & Maintenance
</a>
                    <a href="{{route('contact.edit')}}">Contact</a>
                </div>
            </div>
        </div>
    </body>
</html>
