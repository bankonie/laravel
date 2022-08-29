<!DOCTYPE html>
<html lang="en">
<head>
    @include('backend.includes.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{asset('assets/backend/img/laravellogo.png')}}" alt="laravellogo" height="60" width="60">
        </div>

        @include('backend.includes.navbar')

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{url('backend')}}" class="brand-link">
              <img src="{{asset('assets/backend/img/laravellogo.png')}}" alt="Laravel Stock Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
              <span class="brand-text font-weight-light">Laravel Stock</span>
            </a>

            @include('backend.includes.sidebar')

        </aside>

        <div class="content-wrapper">
            @yield('content')
        </div>

        @include('backend.includes.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>

    </div>

    @include('backend.includes.foot')

    @stack('scripts')
    
</body>
</html>