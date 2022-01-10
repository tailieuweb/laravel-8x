<html>
    <head>
        <title>App Name - @yield('title')</title>
          <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/swiper.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/1488.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/468.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/15.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/91.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/61.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/2048.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">


        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="{{ asset('assets/js/script1.js') }}"></script>

    </head>
    <body>
         @include('product.header-1')

        @yield('content')

         @include('product.partners')
         @include('product.footer')

         <script type="text/javascript" src="{{ asset('assets/js/swiper.min.js') }}"></script>
         <script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>

         <!------ Include the above in your HEAD tag ---------->
    </body>
</html>
