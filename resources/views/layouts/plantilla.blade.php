<!doctype html>
    <html>
        <head>
            <meta charset = "UTF-8">
            <title>Documento</title>

            <style>

                .contenedor{

                    background-color:red;
                    text-align:center;
                }

                .infoGeneral{

                    background-color:blue;
                    text-align:center;
                    margin: 200px 0;
                    color:white;

                }

                .pie{

                    background-color:yellow;
                    text-align:center;

                }

            </style>
        </head>

        <body>

            <div class ="contenedor">

            @yield("cabecera")

            </div>

            <div class ="infoGeneral">

            @yield("infoGeneral")

            </div>

            <div class = "pie">

            @yield("pie")

            <p>Aquí iría el pie de la página</p>

            </div>

        </body>

    </html>