<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        @include('master.templates.header')
    </head>
    <body>
        @include('master.templates.nav')
        @yield('body')
        @include('master.templates.footer')

        <script src="{{url('/')}}/js/jquery-1.11.1.min.js"></script>
        <script src="{{url('/')}}/js/bootstrap.min.js"></script>
        <script src="{{url('/')}}/js/can.custom.js"></script>
        <script src="{{url('/')}}/js/moment.js"></script>
        <script src="{{url('/')}}/js/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="{{url('/')}}/js/featherlight.gallery.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="{{url('/')}}/js/modernizr.custom.65417.js"></script>

        <script src="{{url('/')}}/js/master.js"></script>

        @yield('footercode')

        @section('code')
            {{isset($code) ? $code : ''}}
        @show
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-16197792-11', 'auto');
            ga('send', 'pageview');
        </script>
    </body>
    
</html>