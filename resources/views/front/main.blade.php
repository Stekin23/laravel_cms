<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" />
    <title>Laravel | CMS
    </title>
    <link rel="stylesheet" href="{{asset('css/components.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsee.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- CUSTOM STYLE -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('css/template-style.css')}}">
    <script type="text/javascript" src="{{asset('js/jquery-1.8.3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/responsee.js')}}"></script>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body class="size-1140">
<!-- TOP NAV WITH LOGO -->
<header class="margin-bottom">
    <div class="line">
        <nav>
            <div class="top-nav">
                <p class="nav-text"></p>
                <a class="logo" href="{{route('main')}}">
                    Fashion<span>Blog</span>
                </a>
                <ul class="top-ul right">
                    <li>
                        <a href="{{route('main')}}">Home</a>
                    </li>
                    <li>
                        <a href="{{route('Front.archive.index')}}">Archive</a>
                    </li>
                    @foreach($menus as $item)
                        <li>
                            <a href="{{route('Front.page', $item->id)}}">{{$item->title}}</a>
                            @if(count($item->subMenu))
                                <ul>
                                    @foreach($item->subMenu as $subitem)
                                        <li>
                                            <a href="{{route('Front.spage', $subitem->id)}}">{{$subitem->title}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                    <div class="social right">
                        <a target="_blank" href="https://www.facebook.com/myresponsee">
                            <i class="icon-facebook_circle icon2x"></i>
                        </a>
                        <a target="_blank" href="https://twitter.com/MyResponsee">
                            <i class="icon-twitter_circle icon2x"></i>
                        </a>
                    </div>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- MAIN SECTION -->
@yield('content')
<!-- FOOTER -->
<div class="line">
    <footer>
        <div class="s-12 l-8">
            <p>
                Copyright 2017
            </p>
        </div>
        <div class="s-12 l-4">
            <a class="right" href="http://www.myresponsee.com" title="Responsive framework">
                Prodrom ICT
            </a>
        </div>
    </footer>
</div>
</body>
</html>