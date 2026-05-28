<script>
    window.adminHMDUser = {
        name: @json(Auth::user()->name),
        workspace: "Nun Snap Tenant",
        avatar: @json(Auth::user()->avatar ?? asset('dashboard_assets/images/avatar/avatar.jpg'))
    };
</script>

<script src="{{ asset('dashboard_assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/js/main.js') }}"></script>

@yield('own_scripts')
