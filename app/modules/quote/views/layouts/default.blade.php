<html>
    <head>
        @include('quote::layouts/inc.head')
    </head>
    <body>
        @include('quote::layouts/inc.header')
        <div id='container' class="container">           

            @yield('content')

        </div>
    </body>
</html>
