<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        @include('layouts.head')
    </head>
    <body>
        <div class="container-fluid page">
            @include('layouts.header')
            @include('layouts.nav')
            <div class="content">
                @yield('body')
            </div>
        </div>

        <script type="text/javascript" src="{{ elixir('js/default.js') }}"></script>
        @include('layouts.footer')
        @yield('scripts')
    </body>
    
</html>