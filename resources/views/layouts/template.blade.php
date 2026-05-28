<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body>
    <div class="admin-shell">
        <div class="sidebar-backdrop" data-sidebar-close></div>

        @include('layouts.sidebar')

        <div class="admin-main">
            @include('layouts.header')

            @yield('content')

            @include('layouts.footer')
        </div>
    </div>

    @include('layouts.script')
</body>

</html>
