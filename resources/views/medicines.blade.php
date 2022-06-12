<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Medicine House</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                text-align: center;
            }

            .foto {
                border: 1px solid rgb(0, 0, 0);
                border-radius: 5px;
                padding: 5px;
                width: 250px;
            }

        
            * {
                box-sizing: border-box;
            }

            .column {
                float: left;
                width: 33.33%;
                padding: 5px;
            }

            .row::after {
                content: "";
                clear: both;
                display: table;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            
            <div class="content">
                <h1>Medicines</h1>
                <div class="row">
                    <div class="column">
                        <p>Panadol Extra</p>
                        <a href="medicines/1">
                            <img src="{{asset('img/med1.jpg')}}" class ="foto">
                        </a>
                    </div>
                    <div class="column">
                        <p>Rhinos</p>
                        <a href="medicines/2">
                            <img src="{{asset('img/med2.jpg')}}" class ="foto">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
