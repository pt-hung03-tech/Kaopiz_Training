<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('toi la hung')</title>
</head>
<body>
    @include('header&footer.header')
    <div class="content">
        @yield('content')  
    </div>
    @include('header&footer.footer')
</body>
</html>