
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    @yield("style")
    
</head>

<body>
    <div id="wrapper">
        @include("backend.components.nav")
                
        @yield('content')
       
    </div>
@stack('scripts')
    
</body>
</html>
