<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Biodata Alfan</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            .content {
                text-align: center;
            }
        </style>
            
    </head>
    <body>
        <div class="container">
            <div class="row mt-3 justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header text-center">
                            <!-- bagian judul halaman -->
                            <h2> Biodata Alfan Noufal N. </h2>
                        </div>
                        <div class="card-body">
                            <img src="{{URL::asset('img/Alfan.jpeg')}}" class="rounded mx-auto d-block" alt="Alfan" width="300px"/>
                            <hr>
                            <p class="card-text">Nama : {{$nama}}</p>
                            <p class="card-text">Nim  : 1841720059 </p>
                            <p class="card-text">Kelas  : TI-3F </p>
                            <p class="card-text">Absen : 05 </p>
                            <p class="card-text">No Wa : 085624328309 </p>
                        </div>
                    <div class="card">
                </div>
            </div>
        </div>
    </body>
</html>
