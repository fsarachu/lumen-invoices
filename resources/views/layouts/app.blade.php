<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicon.png">
    <meta name="theme-color" content="#ff5456">
    <meta name="msapplication-navbutton-color" content="#ff5456">
    <meta name="apple-mobile-web-app-status-bar-style" content="#ff5456">
    <title>Rimbos - @yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

<div id="sidebar-menu" class="ui left inverted borderless vertical menu sidebar">
    <div class="header item">Comprobantes</div>
    <a class="item" href="{{route('new.invoice')}}">Cargar</a>
    <a class="item">Listar</a>
</div>

<div class="ui top fixed red borderless inverted massive main menu">
    <div id="sidebar-toggle" class="item">
        <i class="content icon"></i>
    </div>
    <div class="brand item"><span>rimbos_admin</span></div>
</div>

<div class="pusher">
    @yield('content')
</div>
<script src="/js/app.js"></script>
</body>
</html>