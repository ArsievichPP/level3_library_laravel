<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>shpp-library</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="library Sh++">

    <link rel="stylesheet" href="{{env('APP_URL')}}/css/libs.min.css">
    <link rel="stylesheet" href="{{env('APP_URL')}}/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
          crossorigin="anonymous"/>
</head>

<body>

<section id="header" class="header-wrapper">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="col-xs-5 col-sm-2 col-md-2 col-lg-2">
                <div class="logo"><a href="/" class="navbar-brand"><span
                            class="sh">Ш</span><span
                            class="plus">++</span></a></div>
            </div>
            <div class="col-xs-12 col-sm-7 col-md-8 col-lg-8">
                <div class="main-menu">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <form class="navbar-form navbar-right" method="post" action="{{env('APP_URL')}}/search" autocomplete="off">
                            @csrf
                            <div class="form-group">
                                <label for="search"></label><input id="search" name="search" type="text" placeholder="Найти книгу"
                                                                   class="form-control">
                                <div class="loader"><img src="{{env('APP_URL')}}/img/loading.gif"></div>
                                <div id="list" size="" class="bAutoComplete mSearchAutoComplete"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xs-2 col-sm-3 col-md-2 col-lg-2 hidden-xs">
                <div class="social"><a href="https://www.facebook.com/shpp.kr/" target="_blank"><span
                            class="fa-stack fa-sm"><i class="fa fa-facebook fa-stack-1x"></i></span></a>
                    <a href="http://programming.kr.ua/ru/courses#faq" target="_blank"><span class="fa-stack fa-sm"><i
                                class="fa fa-book fa-stack-1x"></i></span></a>
                    @if(\Illuminate\Support\Facades\Request::path()=='admin')
                        <a href="{{env('APP_URL')}}/exit" target="_blank"><span class="fa-stack fa-sm"><i
                                    class="fa fa-times-circle fa-stack-1x"></i></span></a>
                    @else
                        <a href="{{env('APP_URL')}}/admin" target="_blank"><span class="fa-stack fa-sm"><i
                                    class="fa fa-cogs fa-stack-1x"></i></span></a>
                    @endif
                </div>
            </div>
        </div>
    </nav>
</section>

@yield('content')

<section id="footer" class="footer-wrapper">
    <div class="navbar-bottom row-fluid">
        <div class="navbar-inner">
            <div class="container-fuild">
                <div class="content_footer"> Made with<a href="http://programming.kr.ua/" class="heart"><i
                            aria-hidden="true" class="fa fa-heart"></i></a>by HolaTeam
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
</body>
</html>
