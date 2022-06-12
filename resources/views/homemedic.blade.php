<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Medicine House</title> -->

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->

        <!-- Styles -->
        <!-- <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head> -->
    <!-- <body> -->
        @extends('layouts.conquer2')
        @section('content')
        <ul class="page-breadcrumb">
            <li>
                <a href="#">Welcome</a>
            </li>
            <li >
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#" onClick="showInfo()">
                <i class="icon-bulb"></a></i>
            </li>
        </ul>  		
        <div id='showinfo'>

        </div>

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <img src="{{ asset('img/logo2.jpg') }}"/> 

                <div class="title m-b-md">
                    
                </div>
                 
                <div class="links">                   
                    <a href="catalogs">Catalogs</a>
                    <a class="btn btn-default" data-toggle="modal" href="#disclaimer">Disclaimer</a>                                   
                </div>
            </div>
        </div>
        <div class="modal fade" id="disclaimer" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">DISCLAIMER</h4>
                    </div>
                    <div class="modal-body">
                        Pictures shown are for illustration purpose only.Actual product may vary due to product enhancement. 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        @endsection

        @section('javascript')
        <script>
        function showInfo()
        {
            $.ajax({
            type:'POST',
            url:'{{route("medicines.showInfo")}}',
            data:'_token=<?php echo csrf_token() ?>',
            success: function(data){
                $('#showinfo').html(data.msg)
            }
            });
        }
        </script>
        @endsection
        
    <!-- </body> -->
<!-- </html> -->
