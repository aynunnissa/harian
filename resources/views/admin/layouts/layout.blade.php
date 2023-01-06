<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-color: #f6f6f8;
            }

            #sidebar {
                width: 240px;
                position: fixed;
                top: 0;
                bottom: 0;
                left: 0;
            }

            #main {
                padding-left: 240px; 
            }
        </style>
    </head>
    <body class="antialiased">
        <div id="sidebar" class="bg-white border-end">
            @sidebar(['title'=>'Users table']) @endsidebar
        </div>

        <main id="main">
            <div class="p-5">
                @yield('content')
            </div>
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
