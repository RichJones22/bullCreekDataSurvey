<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Admin BCD Survey</title>
    <link rel="stylesheet" media="screen" href="/css/app.css" >
</head>
<body>
    @include('partials.adminNav')

    <div class="container">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="/js/libs.js"></script>
</body>
</html>