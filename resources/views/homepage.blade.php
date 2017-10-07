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

                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h4 class="card-title">Wallboard</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Information screen for Mosque TV</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>

            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>        
    </body>
</html>
