<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        @include('layouts.head')
    </head>
    <body>
        <div class="container-fluid page">
            @yield('body')
        </div>

        <script type="text/javascript" src="{{ elixir('js/default.js') }}"></script>
        @include('layouts.footer')
        @yield('scripts')
    </body>
    
</html>