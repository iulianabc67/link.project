
{{--
@extends('layouts.app')

@section('content')
--}}


        <!doctype html>
<html lang="en">


<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141661290-1" defer></script>
    <script defer>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'UA-141661290-1');
    </script>
    <meta charset="UTF-8" />
    <title>Iulian Carbunaru Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>-->
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->

    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js" defer></script>

    <!--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">-->
    <!--<link rel="stylesheet" href="/resources/demos/style.css">-->
    <!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
    <!--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" defer></script>

    <link href="https://fonts.googleapis.com/css?family=Orbitron:400,900&display=swap" rel="stylesheet">
    <!--<script src="https://kit.fontawesome.com/aee169abdf.js"></script>-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/icofont/icofont.min.css') }}">
    <script type="text/javascript" src="{{ asset('js/home.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/mouse-parallax.js') }}" defer></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}" >
</head>

<body>

<nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="padding: 0">
    <div class="container" style="z-index: 100; background-color: #fff;">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>


<div id="scroll-animate">
    <div id="scroll-animate-main">
        <div class="wrapper-parallax">
            <header>
                <div id="container-paralax">
                    <h1 class="slide one">WELCOME TO MY PORTFOLIO</h1>
                </div>
            </header>

            <section class="content">

                <div class="row">
                    <h2>My Projects</h2>
                </div>

                <div id="blackLine" class="row">
                </div>

                <div class="row">

                        <?php $cards = DB::table('cards')->get(); ?>

                        @foreach($cards as $card)
                            <div class="card" style="width: 18rem;">
                                <a href="{{ $card->href }}" target="_blank"><img src="{{ asset('images/') . $card->img }}" class="card-img-top" alt="{{ $card->alt }}"></a>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $card->title }}</h5>
                                    <p class="card-text">{{ $card->text }}</p>
                                    <a href="{{ $card->href }}" target="_blank" class="btn btn-primary">Go to...</a>
                                </div>
                            </div>
                        @endforeach
                </div>
            </section>

            <footer>
                <div class="container-fluid">
                    <div class="row" style="display: flex; flex-wrap: wrap; justify-content: space-evenly;">

                        <div class="" style="min-width: 200px">
                            <h3 id="footerProjectList">Projects</h3>
                            <ul>
                                <li><a class="link" href="http://iulian.dx.am/spanzuratoarea/">HangMan Game</a></li>
                                <li><a class="link" href="http://iulian.dx.am/db/">            Stock product app</a></li>
                                <li><a class="link" href="http://iulian.dx.am/todo/todo.html"> To do list</a></li>
                                <li><a class="link" href="http://iulian.dx.am/imc/">           PSD to HTML</a></li>
                            </ul>
                        </div>
                        <div class="" style="min-width: 200px">
                            <h3 id="footerContact">Contact</h3>
                            <ul>
                                <li><a id="mail" href="mailto:iuliancarbunaru@gmail.com?subject=Contact%20from%20portfolio%20site">iuliancarbunaru@gmail.com</a></li>
                                <li><a id="telef" href="tel:+40767582970">(+40) 767 582 970</a></li>
                                <li><a id="linkedin" href="https://www.linkedin.com/in/iuliancarbunaru/?locale=en_US" target="_blank">Linkedin</a></li>
                                <li><a id="git" href="https://github.com/iulianabc67?tab=repositories" target="_blank">GitHub</a></li>
                                <li><a id="town" href="#">Bucharest, Romania</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <a class="mx-auto" href="http://www.uptimedoctor.com/publicreport/wpk9888h/198818"><img src="http://www.uptimedoctor.com/images/ud-animated-flat.gif" alt="Website monitoring" border="0" /></a>
                    </div>
                </div>
                <div id="reg">
                    Copyright ©2019 All rights reserved | Made with <i class="icofont-heart-beat-alt"></i> by Iulian Carbunaru for educational purpose.
                </div>
            </footer>
        </div>
    </div>
</div>

</body>

</html>

{{--@endsection--}}
