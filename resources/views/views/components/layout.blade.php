<!DOCTYPE html>
<html>
@include('components.header')

<body>
    @include('components.sidebar-superadmin')
    <div class="p-4 sm:ml-64">
        <div class="mt-14">
            @yield('main')
        </div>
    </div>
    @include('components.footer')
    @include('components.script')
</body>

</html>
