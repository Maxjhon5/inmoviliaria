<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="{{asset('css/styleRequerimientoShow.css')}}">
    </head>
    <body class="antialiased bodyJ">

            @php
                $vadido = "¡Valido!";
                $noVadido = "¡No valido!";
            @endphp
            @if (Session::has('mensaje'))
                <div class="alert alert-success alert-dismissible col-8 d-flex justify-content-center mt-3 mx-auto pt-2 pb-2">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <h4><strong>{{$vadido}}</strong>{{" "}}{{Session::get('mensaje')}}</h4>
                </div>
            @endif

        <div class="row d-flex justify-content-center">
            <div class="col-8 contenedor">
                <table>
                    <tr>
                      <th class="border">Cod Casa</th>
                      <th class="border">superficie inmueble</th>
                      <th class="border">numero habitacion</th>
                      <th class="border">garaje casa</th>
                      <th class="border">numero banios</th>
                      <th class="border">numero cocina</th>
                      <th class="border">numero sala</th>
                      <th class="border">numerode pisos</th>
                      <th class="border">parrilero</th>
                      <th class="border">piscina</th>
                      <th class="border">patio</th>
                      <th class="border">fecha construccion</th>
                      <th class="border">superficie construccion</th>
                      <th class="border">Transaccion</th>
                    </tr>
                    
                      
                @if(!$casas->isEmpty())
                    @foreach ($casas as $casa)
                    <tr>
                        <td class="border">{{$casa->codcasa}}</td>
                        <td class="border">{{$casa->superficieinmueble}}</td>
                        <td class="border">{{$casa->numerohabitacion}}</td>
                        <td class="border">{{$casa->garajecasa}}</td>
                        <td class="border">{{$casa->numerobanios}}</td>
                        <td class="border">{{$casa->numerococina}}</td>
                        <td class="border">{{$casa->numerosala}}</td>
                        <td class="border">{{$casa->numerodepisos}}</td>
                        <td class="border">{{$casa->parrilero}}</td>
                        <td class="border">{{$casa->piscina}}</td>
                        <td class="border">{{$casa->patio}}</td>
                        <td class="border">{{$casa->fechaconstruccion}}</td>
                        <td class="border">{{$casa->superficieconstruccion}}</td>
                        <td class="border">
                            <a href="" class="btn btn-primary btnTransaccion">Realizar transaccion</a>
                        </td>
                    </tr>
                                 
                    @endforeach
                @endif
                </table>  
            </div>  
        </div>            
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</html>