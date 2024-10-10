<!DOCTYPE html>
<html>
@include('Admin.layouts.header')

<body class="bg-gray-100 dark:bg-slate-700">
    @include('Admin.layouts.navbar')
    @include('Admin.layouts.sidebar')
    <div class="p-4 sm:ml-64">
        <div class="mt-20">
            @yield('main')
        </div>
    </div>
    @include('Admin.layouts.footer')
    @include('Admin.layouts.script')
</body>

</html>
