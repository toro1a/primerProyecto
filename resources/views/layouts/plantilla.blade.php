<!doctype html>
    <html>
        <head>
            <meta charset = "UTF-8">
            <title>Documento</title>
            <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
            <script src="{{ asset('js/bootstrap.min.js"></script>
        </head>

        <body>
            
            @include("layouts.navbar")
            @yield("cabecera")

            
            @include("layouts.card")
            @yield("infoGeneral")


            @yield("pie")

            <p>Aquí iría el pie de la página</p>

        </body>

    </html>