<html lang="en">
<head>
    @include('includes.head')
    
</head>
<body>
    @include('includes.menu')

    <div style="margin-top: 70px">
    @yield('content')
    </div>

    @include('includes.foot')
</body>
</html>