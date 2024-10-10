<!DOCTYPE html>
<html>
@include('guest.layouts.header')

<body class="bg-gray-100 dark:bg-slate-700">
    @include('guest.layouts.navbarexsplore')
        <div class="">
            @yield('main')
        </div>
    </div>
    @include('guest.layouts.footer')
    @include('guest.layouts.script')
</body>

</html>
