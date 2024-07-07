
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    @yield("style")
</head>

<body>
    <div id="wrapper">
        @yield('content')
    </div>
@stack('scripts')
    
</body>
</html>
