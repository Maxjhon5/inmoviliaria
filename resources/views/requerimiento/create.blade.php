<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Requerimiento</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

        <link rel="stylesheet" href="{{asset('css/styleRequerimiento.css')}}">

    </head>
    <body class="antialiased">
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

            @if (Session::has('mensajeErrorEdad'))
                <div class="alert alert-warning alert-dismissible col-8 d-flex justify-content-center mt-3 mx-auto pt-2 pb-2">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <h4><strong>{{$noVadido}}</strong>{{" "}}{{Session::get('mensajeErrorEdad')}}</h4>
                </div>
            @endif

            @if (Session::has('mensajeErrorCategoria'))
                <div class="alert alert-warning alert-dismissible col-8 d-flex justify-content-center mt-3 mx-auto pt-2 pb-2">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <h4><strong>{{$noVadido}}</strong>{{" "}}{{Session::get('mensajeErrorCategoria')}}</h4>
                </div>
            @endif

            @if (Session::has('mensajeErrorExiste'))
                <div class="alert alert-warning alert-dismissible col-8 d-flex justify-content-center mt-3 mx-auto pt-2 pb-2">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <h4><strong>{{$noVadido}}</strong>{{" "}}{{Session::get('mensajeErrorExiste')}}</h4>
                </div>
            @endif

            @if (Session::has('mensajeErrorCamiseta'))
                <div class="alert alert-warning alert-dismissible col-8 d-flex justify-content-center mt-3 mx-auto pt-2 pb-2">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <h4><strong>{{$noVadido}}</strong>{{" "}}{{Session::get('mensajeErrorCamiseta')}}</h4>
                </div>
            @endif

            <div class="col-7 p-4 mx-auto contenedorForm" >
                <form action="{{ url('/requerimiento/create/')}}" method="POST" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="d-flex justify-content-center mb-4 border-bottom">
                        <h1 class="tituloFomulario">INSCRIPCION DE JUGADOR</h1>
                    </div>
                    <div class="row">
                        <div class="col-4" id="columna1">
                            <div class="form-group mb-3">
                                <label for="" class="form-label">Nombre:</label>
                                <input type="text" class="form-control" placeholder="Ingresar nombre" id="nombre" name="nombre" value="{{ old('nombre') }}">
                                @error('nombre')
                                    <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="" class="form-label">CI:</label>
                                <input type="text" class="form-control" placeholder="Ingrese su CI" id="ci" name="ci" value="{{ old('ci') }}">
                                @error('ci')
                                    <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>

                            @php
                                date_default_timezone_set('America/La_Paz');
                                $fechaActual = date('Y-m-d');
                                $anio = date('Y')-100;
                                $fecha = $anio."-01-01"
                            @endphp
                            <div class="form-group mb-3 contFecha">
                                <label for="" class="form-label">Fecha de nacimiento:</label>
                                <input type="date" class="form-control" placeholder="Ingrese su fecha" id="fechaNacimiento" name="fechaNacimiento"
                                    value="{{ old('fechaNacimiento') }}" min="{{$fecha}}" max="{{$fechaActual}}">
                                @error('fechaNacimiento')
                                    <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                        <div class="col-4" id="columna2">
                            <div class="form-group mb-3">
                                <label for="" class="form-label">Apellido Paterno:</label>
                                <input type="text" class="form-control" placeholder="Ingresar apellido paterno" id="apellidoPaterno" name="apellidoPaterno" value="{{ old('apellidoPaterno') }}">
                                @error('apellidoPaterno')
                                    <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="" class="form-label">Telefono:</label>
                                <input type="text" class="form-control" placeholder="Ingrese su telefono" id="telefono" name="telefono" value="{{ old('telefono') }}">
                                @error('telefono')
                                    <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-4" id="columna3">
                            <div class="form-group mb-3 ">
                                <label for="" class="form-label">Apellido Materno:</label>
                                <input type="text" class="form-control" placeholder="Ingresar apellido materno" id="apellidoMaterno" name="apellidoMaterno" value="{{ old('apellidoMaterno') }}">
                                @error('apellidoMaterno')
                                    <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group mb-3 ">
                                <label for="" class="form-label">Direccion:</label>
                                <input type="text" class="form-control" placeholder="Ingresar direccion" id="Direccion" name="Direccion" value="{{ old('Direccion') }}">
                                @error('Direccion')
                                    <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mb-4 border-bottom">
                        <h3 class="tituloFomulario">REQUERIMIENTOS</h3>
                    </div>

                    <div class="row">
                        <div class="col-6" id="">
                            <h4 class="subtitulo">Inmuebles</h4>
                        </div>
                        <div class="col-6" id="">
                            <h4 class="subtitulo">Tipo de contrato</h4>
                        </div>
                        <div class="col-2" id="columna1-1">
                            
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
                                <label class="form-check-label" for="check1">Casa</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
                                <label class="form-check-label" for="check2">Departamento</label>
                            </div>
                        </div>
                        <div class="col-2" id="columna2-1">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
                                <label class="form-check-label" for="check1">Cuarto</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
                                <label class="form-check-label" for="check2">Garzonier</label>
                            </div>
                        </div>
                        <div class="col-2" id="columna3-1">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
                                <label class="form-check-label" for="check1">Lote</label>
                            </div>
                        </div>
                        <div class="col-2" id="columna4-1">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
                                <label class="form-check-label" for="check1">Alquiler</label>
                            </div>
                        </div>
                        <div class="col-2" id="columna5-1">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
                                <label class="form-check-label" for="check1">Anticretico</label>
                            </div>
                        </div>
                        <div class="col-2" id="columna6-1">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
                                <label class="form-check-label" for="check1">Venta</label>
                            </div>
                        </div>
                        
                    </div>

                    <div class="d-flex justify-content-center mb-4 border-bottom">
                        <h3 class="tituloFomulario">REQUERIMIENTOS DE CASAS</h3>
                    </div>

                    <div class="row">
                        <div class="col-2" id="columna3">
                            <div class="form-group mb-3 ">
                                <label for="" class="form-label">Superficie:</label>
                                <input type="text" class="form-control" placeholder="Ingresar" id="Superficie" name="Superficie" value="{{ old('Superficie') }}">
                                @error('Superficie')
                                    <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group mb-3 ">
                                <label for="" class="form-label">N° Patio:</label>
                                <input type="text" class="form-control" placeholder="Ingresar" id="Patio" name="Patio" value="{{ old('Patio') }}">
                                @error('Patio')
                                    <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-2" id="columna3">
                            <div class="form-group mb-3 ">
                                <label for="" class="form-label">N° Habitacion:</label>
                                <input type="text" class="form-control" placeholder="Ingresar" id="Habitacion" name="Habitacion" value="{{ old('Habitacion') }}">
                                @error('Habitacion')
                                    <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-3 ">
                                <label for="" class="form-label">Superficie Construccion:</label>
                                <input type="text" class="form-control" placeholder="Ingresar" id="superficieConstruccion" name="superficieConstruccion" value="{{ old('superficieConstruccion') }}">
                                @error('superficieConstruccion')
                                    <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-2" id="columna3">
                            <div class="form-group mb-3 ">
                                <label for="" class="form-label">N° Sala:</label>
                                <input type="text" class="form-control" placeholder="Ingresar" id="Sala" name="Sala" value="{{ old('Sala') }}">
                                @error('Sala')
                                    <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-3 contFecha">
                                <label for="" class="form-label">Fecha de construccion:</label>
                                <input type="date" class="form-control" placeholder="Ingrese" id="fechaConstruccion" name="fechaConstruccion"
                                    value="{{ old('fechaConstruccion') }}" min="{{$fecha}}" max="{{$fechaActual}}">
                                @error('fechaConstruccion')
                                    <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>
                            
                        </div>
                        <div class="col-2" id="columna3">
                            <div class="form-group mb-3 ">
                                <label for="" class="form-label">N° Baño:</label>
                                <input type="text" class="form-control" placeholder="Ingresar" id="Banio" name="Banio" value="{{ old('Banio') }}">
                                @error('Banio')
                                    <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-check mt-5">
                                <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
                                <label class="form-check-label" for="check1">Garaje</label>
                            </div>
                        </div>
                        <div class="col-2" id="columna3">
                            <div class="form-group mb-3 ">
                                <label for="" class="form-label">N° Cocina:</label>
                                <input type="text" class="form-control" placeholder="Ingresar" id="Cocina" name="Cocina" value="{{ old('Cocina') }}">
                                @error('Cocina')
                                    <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-check mt-5">
                                <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
                                <label class="form-check-label" for="check1">Parrillero</label>
                            </div>
                        </div>
                        <div class="col-2" id="columna3">
                            <div class="form-group mb-3 ">
                                <label for="" class="form-label">N° Pisos:</label>
                                <input type="text" class="form-control" placeholder="Ingresar" id="Pisos" name="Pisos" value="{{ old('Pisos') }}">
                                @error('Pisos')
                                    <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-check mt-5">
                                <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
                                <label class="form-check-label" for="check1">Piscina</label>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mb-4 border-bottom">
                        <h3 class="tituloFomulario">REQUERIMIENTOS DE DEPARTAMENNTO</h3>
                    </div>

                    <div class="row">
                        <div class="col-2" id="columna3">
                            <div class="form-group mb-3 ">
                                <label for="" class="form-label">Superficie:</label>
                                <input type="text" class="form-control" placeholder="Ingresar" id="Superficie" name="Superficie" value="{{ old('Superficie') }}">
                                @error('Superficie')
                                    <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
                                <label class="form-check-label" for="check1">Garaje</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
                                <label class="form-check-label" for="check1">Sala de juego</label>
                            </div>
                        </div>
                        <div class="col-2" id="columna3">
                            <div class="form-group mb-3 ">
                                <label for="" class="form-label">N° Habitacion:</label>
                                <input type="text" class="form-control" placeholder="Ingresar" id="Habitacion" name="Habitacion" value="{{ old('Habitacion') }}">
                                @error('Habitacion')
                                    <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
                                <label class="form-check-label" for="check1">Wifi</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
                                <label class="form-check-label" for="check1">Parrillero</label>
                            </div>
                        </div>
                        <div class="col-2" id="columna3">
                            <div class="form-group mb-3 ">
                                <label for="" class="form-label">N° Sala:</label>
                                <input type="text" class="form-control" placeholder="Ingresar" id="Sala" name="Sala" value="{{ old('Sala') }}">
                                @error('Sala')
                                    <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
                                <label class="form-check-label" for="check1">Tv Cable</label>
                            </div>
                        </div>
                        <div class="col-2" id="columna3">
                            <div class="form-group mb-3 ">
                                <label for="" class="form-label">N° Baño:</label>
                                <input type="text" class="form-control" placeholder="Ingresar" id="Banio" name="Banio" value="{{ old('Banio') }}">
                                @error('Banio')
                                    <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
                                <label class="form-check-label" for="check1">Ascensor</label>
                            </div>
                        </div>
                        <div class="col-2" id="columna3">
                            <div class="form-group mb-3 ">
                                <label for="" class="form-label">N° Cocina:</label>
                                <input type="text" class="form-control" placeholder="Ingresar" id="Cocina" name="Cocina" value="{{ old('Cocina') }}">
                                @error('Cocina')
                                    <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
                                <label class="form-check-label" for="check1">Piscina</label>
                            </div>
                        </div>
                        <div class="col-2" id="columna3">
                            <div class="form-group mb-3 ">
                                <label for="" class="form-label">Nivel Piso:</label>
                                <input type="text" class="form-control" placeholder="Ingresar" id="nivelPiso" name="nivelPiso" value="{{ old('nivelPiso') }}">
                                @error('nivelPiso')
                                    <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
                                <label class="form-check-label" for="check1">Balcon</label>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mb-4 border-bottom">
                        <h3 class="tituloFomulario">REQUERIMIENTOS DE CUARTOS</h3>
                    </div>

                    <div class="row">
                        <div class="col-2" id="columna3">
                            <div class="form-group mb-3 ">
                                <label for="" class="form-label">Superficie:</label>
                                <input type="text" class="form-control" placeholder="Ingresar" id="Superficie" name="Superficie" value="{{ old('Superficie') }}">
                                @error('Superficie')
                                    <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-2" id="columna3">
                            <div class="form-group mb-3 ">
                                <label for="" class="form-label">N° Baños:</label>
                                <input type="text" class="form-control" placeholder="Ingresar" id="banio" name="banio" value="{{ old('banio') }}">
                                @error('banio')
                                    <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-2" id="columna3">
                            <div class="form-check mt-4">
                                <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
                                <label class="form-check-label" for="check1">Tv Cable</label>
                            </div>
                        </div>
                        <div class="col-2" id="columna3">
                            <div class="form-check mt-4">
                                <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
                                <label class="form-check-label" for="check1">Wifi</label>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mb-4 border-bottom">
                        <h3 class="tituloFomulario">REQUERIMIENTOS DE GARZONIER</h3>
                    </div>

                    <div class="row">
                        <div class="col-2" id="columna3">
                            <div class="form-group mb-3 ">
                                <label for="" class="form-label">Superficie:</label>
                                <input type="text" class="form-control" placeholder="Ingresar" id="Superficie" name="Superficie" value="{{ old('Superficie') }}">
                                @error('Superficie')
                                    <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-2" id="columna3">
                            <div class="form-group mb-3 ">
                                <label for="" class="form-label">N° Habitacion:</label>
                                <input type="text" class="form-control" placeholder="Ingresar" id="Habitacion" name="Habitacion" value="{{ old('Habitacion') }}">
                                @error('Habitacion')
                                    <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-2" id="columna3">
                            <div class="form-group mb-3 ">
                                <label for="" class="form-label">N° Cocina:</label>
                                <input type="text" class="form-control" placeholder="Ingresar" id="Cocina" name="Cocina" value="{{ old('Cocina') }}">
                                @error('Cocina')
                                    <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-2" id="columna3">
                            <div class="form-check mt-4">
                                <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
                                <label class="form-check-label" for="check1">Tv Cable</label>
                            </div>
                        </div>
                        <div class="col-2" id="columna3">
                            <div class="form-check mt-4">
                                <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
                                <label class="form-check-label" for="check1">Wifi</label>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mb-4 border-bottom">
                        <h3 class="tituloFomulario">REQUERIMIENTOS DE LOTE</h3>
                    </div>

                    <div class="row">
                        <div class="col-2" id="columna3">
                            <div class="form-group mb-3 ">
                                <label for="" class="form-label">Superficie:</label>
                                <input type="text" class="form-control" placeholder="Ingresar" id="Superficie" name="Superficie" value="{{ old('Superficie') }}">
                                @error('Superficie')
                                    <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-2" id="columna3">
                            <div class="form-check mt-4">
                                <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
                                <label class="form-check-label" for="check1">Urbanizacion</label>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mt-4 mb-4 col-8 mx-auto">
                        <button type="submit" class="boton">Registrar</button>
                        <a type="button" href="{{ url('subirLogo') }}" class="boton"> Cancelar </a>
                    </div>
                </form>
            </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    
</html>