<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials._head')
</head>

<body>
    <div id="wrapper">
        @include('partials._sidenav')

        <div id="page-wrapper" class="gray-bg">

            @include('partials._topnav')

            @include('partials._breadcrumb')

            @yield('content')

            @include('partials._footer')

        </div>

        @include('partials._javascript')

        @yield('scripts')
    </div>
</body>
</html>