<!DOCTYPE html>
<html>
    <head>
        <title>Mosque Tech</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/homepage.css') }}" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>
        @include('navbar')
        <div class="container">
            <div class="content">
                <div class="title">mosque<strong>.tech<strong></div>
                <p>Collection of open source software for <strong>mosques</strong>.</p>
                <button type="button" class="btn btn-default">Default</button>
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>        
    </body>
</html>
