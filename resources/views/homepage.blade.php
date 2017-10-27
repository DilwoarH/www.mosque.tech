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

                <h3>Free Online Software</h3>
                
                @include('patterns.card', [
                    'logo' => 'https://d2k1ftgv7pobq7.cloudfront.net/meta/u/res/images/brand-assets/Logos/0099ec3754bf473d2bbf317204ab6fea/trello-logo-blue.png',
                    'title' => 'Trello',
                    'subtitle' => 'Task Management Application',
                    'description' => "Trello is the easy, free, flexible, and visual way to manage your projects and organize anything, trusted by millions of people from all over the world.",
                    'link' => ['href' => "https://www.trello.com", 'label' => "Go to Trello"],
                    'additional_link' => ['href' => "https://www.trello.com/pricing", 'label' => "Pricing"]
                ])


                

            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>        
    </body>
</html>
