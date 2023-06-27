<?php

namespace App\Http\Controllers;

use App\Models\Requerimiento;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Requerimiento $requerimiento)
    {
        //
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
