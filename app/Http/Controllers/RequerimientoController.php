<?php

namespace App\Http\Controllers;

use App\Models\Requerimiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequerimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        /*$jugadores = DB::table('jugadores')
                            ->select('IdCategoria')
                            ->where('IdEquipo',$id)
                            ->distinct()
                            ->get();

        $categorias = DB::table('categorias_por_equipo')
                            ->select('*')
                            ->join('categorias','categorias.IdCategoria','=','categorias_por_equipo.IdCategoria')
                            ->where('IdEquipo',$id)
                            ->whereNull('categorias_por_equipo.deleted_at')
                            ->get();
        $paises = DB::table('paises')
                ->orderBy('Nacionalidad', 'asc')
                ->get();*/

        //return view('requerimiento.create',compact('categorias','id','paises'));
        return view('requerimiento.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        date_default_timezone_set('America/La_Paz');
        $fechaActual = date('Y-m-d');
        $anio = date('Y')-100;
        $fecha = $anio."-01-01";


        $nombre = $request -> nombreCliente;
        $apellidoPaterno = $request -> apellidoPaternoCliente;
        $apellidoMaterno = $request -> apellidoMaternoCliente;

        $cliente = new Cliente;
        $cliente -> nombrecliente = $nombre+$apellidoPaterno+$apellidoMaterno;
        $cliente -> cicliente = $request -> ciCliente;
        $cliente -> direccioncliente = $request -> direccionCliente;
        $cliente -> save();

        $telefonoCliente = new Telefon_Cliente;
        $telefonoCliente -> codCliente = $cliente -> codCliente;
        $telefonoCliente -> telefonoCliente = $request -> telefonoCliente;
        $telefonoCliente -> save();

        $nombreEmpl = $request -> nombreEmpleado;
        $apellidoPaternoEmpl = $request -> apellidoPaternoEmpleado;
        $apellidoMaternoEmpl = $request -> apellidoMaternoEmpleado;

        $empleado = new Empleado;
        $empleado -> nombreempleado = $nombreEmpl+$apellidoPaternoEmpl+$apellidoMaternoEmpl;
        $empleado -> ciempleado = $request -> ciEmpleado;
        $empleado -> telefonoempleado = $request -> ciEmpleado;
        $empleado -> direccionempleado = $request -> direccionEmpleado;
        $empleado -> save();

        $contratoRequerimiento = new Contrato_Requerimiento;
        $contratoRequerimiento -> codCliente = $cliente -> codCliente;
        $contratoRequerimiento -> codEmpleado = $empleado -> codEmpleado;
        $contratoRequerimiento -> fechaContratoRequerimiento = new \DateTime();
        $contratoRequerimiento -> save();

        //IMUEBLE
        $casa = $request->has('casa');
        $departamento = $request->has('departamento');
        $cuarto = $request->has('cuarto');
        $garzonier = $request->has('garzonier');
        $lote = $request->has('lote');

        //TIPO DE CONTRATO
        $alquiler = $request->has('alquiler');
        $anticretico = $request->has('anticretico');
        $venta = $request->has('venta');

        if($casa){
            $consulta = DB::table('casa')
                            ->select('codcasa','superficieinmueble','numerohabitacion','garajecasa','numerobanios','numerococina','numerosala','numerodepisos',
                            'parrilero','piscina','patio','fechaconstruccion','superficieconstruccion',)
                            ->join('contrato','contrato.codcontrato','=','casa.codcontrato')
                            ->where('superficieinmueble',$request -> superficieCasa)
                            ->where('numerohabitacion',$request -> numeroHabitacionCasa)
                            ->where('garajecasa',$request -> garajeCasa)
                            ->where('numerobanios',$request -> numeroBanioCasa)
                            ->where('numerococina',$request -> numeroCocinaCasa)
                            ->where('numerosala',$request -> numeroSalaCasa)
                            ->where('numerodepisos',$request -> numeroPisosCasa)
                            ->where('parrilero',$request -> parrilleroCasa)
                            ->where('piscina',$request -> piscinaCasa)
                            ->where('patio',$request -> patioCasa)
                            ->where('fechaconstruccion',$request -> fechaConstruccionCasa)
                            ->where('superficieconstruccion',$request -> superficieConstruccionCasa)
                            ->where('tipocontrato','ALQUILER')
                            ->get();
            if($alquiler){
                $consulta->where('tipocontrato', 'ALQUILER');
            }
            if($anticretico){
                $consulta->where('tipocontrato', 'ANTICRETICO');
            }
            if($venta){
                $consulta->where('tipocontrato', 'VENTA');
            }
                            
        }else if($departamento){
            
        }else if($cuarto){
            
        }else if($garzonier){
            
        }else if($lote){
            
        }

        return redirect()->route('requerimiento.show')->with('consulta', $consulta)->with('mensaje', 'Se realizó el registro correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $casas = DB::table('casa')->get();

        return view('requerimiento.show',compact('casas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Requerimiento $requerimiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Requerimiento $requerimiento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Requerimiento $requerimiento)
    {
        //
    }
}
