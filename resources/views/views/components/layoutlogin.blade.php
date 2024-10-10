<!DOCTYPE html>
<html>
@include('components.header')

<body>
    {{-- @include('components.navbar') --}}
    {{-- @include('components.sidebar-superadmin') --}}
    <div class=" bg-gray-100 flex flex-col items-center  w-full  h-screen">
        @yield('main')
    </div>
    @include('components.footer')
    @include('components.script')
</body>

</html>
