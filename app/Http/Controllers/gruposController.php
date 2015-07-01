<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Grupos;
use App\Materias;
use App\Maestros;
use App\Alumnos;
use App\Alugrupos;
use App\Http\Controllers\Controller;

class gruposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function Index()
    {
        $grupos = Grupos::all();
        $materias = Materias::all();
        $maestros = Maestros::all();
        $alumnos = Alumnos::all();
        $alugrupos = Alugrupos::all();                     
        return view('mostrarGrupos', ['grupos' => $grupos], ['materias' => $materias], ['maestros' => $maestros], ['alumnos' => $alumnos], ['Alugrupos' => $alugrupos]);
    }
    /*public function Index()
    {
        $result3 = \DB::table('contenedor')->get();
        $result = \DB::table('materias')->get();
        $result2 = \DB::table('grupos')->get();


        return view('mostrarGrupos', compact('result'), compact('result2'), compact('result3'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
