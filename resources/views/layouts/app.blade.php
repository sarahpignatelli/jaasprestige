<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Adding start up code, title, scripts, fonts and styles -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="icon" href="images/icon.png">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/booking.js') }}" defer></script>
    
    <!-- Include jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="jquery-1.8.3.js"></script>

    <script type="text/javascript">
		var centreGot = false;
	</script>
	
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8MnyEDv6jwBbRJbjr6oez0kAc6MJtGXg&libraries=places, geometry">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js" async defer></script>
  
    
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <!-- Making the Logo direct to the Home Page -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li><a href="{{ url('/') }}"><img src="/images/logo.jpg" class="logo" alt="JAAS Prestige"></a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <!-- Adding links to the Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li><a id="homelink" class="nav-link" href="{{ url('/') }}">Home</a></li>
	                    <li><a id="carslink" class="nav-link" href="{{ url('cars') }}">Cars</a></li>
	                    <li><a id="locationslink" class="nav-link" href="{{ url('locations') }}">Locations</a></li>
	                    <li><a id="contactlink" class="nav-link" href="{{ url('contact') }}">Contact</a></li>
	                    <li><a id="aboutlink" class="nav-link" href="{{ url('about') }}">About</a></li>
	                    
	                   <!-- If the user is a guest, then add the LOGIN and REGISTER buttons -->
                        @guest
                            <li><a id="loginlink" class="nav-link upper-button bouncy" style="animation-delay:0.07s" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a id="registerlink" class="nav-link upper-button bouncy" style="animation-delay:0.14s" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        
                        <!-- If the user is loggeed in then add a Dropdown Menu instead of the LOGIN and REGISTER buttons -->
                        @else
                        <!-- show dashboard link if user is Admin -->
                         @if(Auth::user()->isAdmin())
	                        <li><a id=adminlink class="nav-link" href="{{ url('CarsCRUD') }}">Dashboard</a></li>
	                    @endif
	                     <!-- The name of the user will appear after logging in -->
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle upper-button" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                
                                <!-- Dropdown Menu links -->
                                <div id='ddmenu' class="dropdown-menu text-left" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('booking') }}">{{ __('BOOK') }}</a>
                                    <a class="dropdown-item" href="{{ url('return') }}">{{ __('RETURN') }}</a>
                                    <a class="dropdown-item" href="{{ url('report') }}">{{ __('HISTORY') }}</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('LOGOUT') }}
                                    </a>
                                    <!-- Logout Functionality -->
                                    <form id="logout-form" name="logoutlink" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Yielding Content from other pages to reduce code repitition  -->
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
