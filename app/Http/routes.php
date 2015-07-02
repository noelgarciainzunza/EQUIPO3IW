<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Materias;
use App\Grupos;

Route::get('/', 'materiasController@Index');

Route::get('groups', 'gruposController@Index');
Route::get('index', 'IndexController@Index');

/*Route::get('grupos/{id}', ['as'=> 'grupos', 'uses' => 'materiasController@allmaterias']);
*/
Route::get('grupos/{id}', ['as' => 'gruposs', function($id){

		$materias = Materias::all();
        $grupos = \DB::table('grupos')
        ->select('grupos.id','grupos.aula', 'maestros.nombre as maestro', 'materias.nombre as materia')
        ->where('id_materia', '=', $id)
        ->join('maestros','id_maestro','=','maestros.id')
        ->join('materias', 'id_materia', '=','materias.id')
        ->get();
        return View::make('mostrarGrupos')->with('grupos',$grupos)->with('materias',$materias);
}]);