<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    @include('components.head')
    
    <body>
        
        @include('components.header_backend')

        @yield('content')

    </body>

    @include('components.scripts')
    @yield('script')
    
</html>