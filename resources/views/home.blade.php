<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="/css/css.home.css" rel="stylesheet">
        <!-- Styles -->
        

       
    </head>
    <body>
        <nav>
            
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>    
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf

            </form>
        </nav>
        
     @yield('content')
    </body>
</html>
