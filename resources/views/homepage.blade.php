<!DOCTYPE html>
<html>
    <head>
        <title>m Tech</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/homepage.css') }}" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>
        @include('navbar')
        <div class="container">
            <div class="content">
                <div class="title">m<strong>.tech<strong></div>

                <h3>Free Online Software</h3>
                
                @include('patterns.cards', $services)

            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>        
    </body>
</html>
