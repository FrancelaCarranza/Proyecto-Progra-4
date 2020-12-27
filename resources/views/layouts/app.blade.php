<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Decanter Store') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    #navbar {
        background: #87643B;


    }

    #navbar a {
        color: #FFF;
        font-weight: bold;

    }

    #logout a {
        color: #000;

    }


    body {
        background: #D1913C;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #FFD194, #D1913C);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #FFD194, #D1913C);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }
    </style>
</head>

<body>
    <div id="app">
        <nav id="navbar" class="navbar navbar-expand-md  shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <i class="fas fa-wine-bottle fa-2x"></i> {{ config('app.name', 'Decanter Store') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('home') }}">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/contact') }}">History <span
                                    class="sr-only">(current)</span></a>
                        </li>


                        @if(!Auth::guest())
                        @if ( Auth::user()->role_id == 1)

                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('categories.index') }}">Categories</a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link " href="{{ route('products.index') }}">Products</a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link " href="{{ route('orders.index') }}">Orders</a>
                        </li>

                        @else
                        <li class="nav-item active">
                            <a class="nav-link " href="{{ route('orders.userOrder') }}">Orders</a>
                        </li>

                        @endif



                        @endif



                    </ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item active">
                            <a class="nav-link " href="{{ route('cart.index') }}">Cart

                                @if(count(Cart::getContent()))

                                <span class="badge badge-light">
                                    {{count(Cart::getContent())}}

                                </span>
                                @else

                                <span class="badge badge-light">
                                    0

                                </span>
                                @endif
                            </a>
                        </li>

                        <!-- Authentication Links -->


                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>



                            <div id='logout' class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">


                                    {{ __('Logout') }}


                                </a>



                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>