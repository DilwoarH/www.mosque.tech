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
                
                @include('patterns.cards', ["cards" => [
                        [
                            'logo' => asset('images/trello.png'),
                            'title' => 'Trello',
                            'subtitle' => 'Task Management Application',
                            'description' => "Trello is the easy, free, flexible, and visual way to manage your projects and organize anything, trusted by millions of people from all over the world.",
                            'link' => ['href' => "https://www.trello.com", 'label' => "Go to Trello"],
                            'additional_link' => ['href' => "https://www.trello.com/pricing", 'label' => "Pricing"],
                            'help_link' => ['href' => "http://help.trello.com/", 'label' => "Help"],
                        ],
                        [
                            'logo' => asset('images/google-docs.png'),
                            'title' => 'Google Docs',
                            'subtitle' => 'Word Document Processor',
                            'description' => "Google Docs brings your documents to life with smart editing and styling tools to help you easily format text and paragraphs. Choose from hundreds of fonts, add links, images, and drawings. All for free.",
                            'link' => ['href' => "https://docs.google.com", 'label' => "Go to Google Docs"],
                            'additional_link' => ['href' => "https://www.google.com/docs/about/", 'label' => "About Google Docs"],
                            'help_link' => ['href' => "https://gsuite.google.com/learning-center/products/docs/", 'label' => "Help"],
                        ],
                    ]]
                )


                

            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>        
    </body>
</html>
