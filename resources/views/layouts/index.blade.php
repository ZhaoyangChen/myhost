<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/index.css" />

    <script src="assets/js/jquery-2.0.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="top-header">
        @yield('top-header')
    </div>

    <div id="navbarDiv">
        @yield('navbar')
    </div>

    <div id="main">
        @yield('main')
    </div>

</body>
</html>
