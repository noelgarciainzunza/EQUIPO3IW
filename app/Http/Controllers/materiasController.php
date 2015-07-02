<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Materias;
use App\Maestros;
use App\Grupos;
use App\Http\Controllers\Controller;

class materiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function Index()
    {

         return view('master')->with( ['materias' => Materias::all(),
            'grupos' => Grupos::all()]);

    }
   /* public function Index()
    {
         $result = \DB::table('materias')->get();

         return view('master', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */

    public function allmaterias($id){

    
    return view('mostrarGrupos')->with([
            'materias' => Materias::all(),
            'grupos' => Grupos::where('id_materia', '=', $id)->get()
            ]);
    }

    public function create()
    {
        //
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
