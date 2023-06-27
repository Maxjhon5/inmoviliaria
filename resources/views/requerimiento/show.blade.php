<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="{{asset('css/StyleListaTecnicos.css')}}">
    </head>
    <body class="antialiased bodyJ">
        @if(!$casas->isEmpty())
            @foreach ($casas as $casa)
                <div class="row">
                    <div class="col-1"><h5>{{$casa->superficieinmueble}} </h5></div>
                    <div class="col-1"><h5>{{$casa->numerohabitacion}} </h5></div>
                    <div class="col-1"><h5>{{$casa->garajecasa}} </h5></div>
                    <div class="col-1"><h5>{{$casa->numerobanios}} </h5></div>
                    <div class="col-1"><h5>{{$casa->numerococina}} </h5></div>
                    <div class="col-1"><h5>{{$casa->numerosala}} </h5></div>
                    <div class="col-1"><h5>{{$casa->numerodepisos}} </h5></div>
                    <div class="col-1"><h5>{{$casa->parrillero}} </h5></div>
                    <div class="col-1"><h5>{{$casa->piscina}} </h5></div>
                    <div class="col-1"><h5>{{$casa->patio}} </h5></div>
                    <div class="col-1"><h5>{{$casa->fechaconstruccion}} </h5></div>
                    <div class="col-1"><h5>{{$casa->superficieconstruccion}} </h5></div>
                  </div>                        
            @endforeach
        @else

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</html>