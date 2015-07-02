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
use App\Alugrupos;
Route::get('/', 'materiasController@Index');

/*Route::get('groups', 'gruposController@Index');
*/
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
        return view('mostrarGrupos')->with('grupos',$grupos)->with('materias',$materias);
}]);


Route::get('generarPdf/{id}/{maestro}/{aula}/', ['as' => 'pdf', function(){

		$grupoid = Route::input('id');
		$aula = Route::input('aula');
		$maestro = Route::input('maestro');
		$alumnos = \DB::table('Alugrupos')
		->select('alumnos.nombre as alumno','id_alumno')
		->where('id_grupo','=', $grupoid)
		->join('alumnos','id_alumno','=','alumnos.id')
		->get();
		$noalumnos= 0;
		$cont=0;
		foreach ($alumnos as $alum) {
			++$noalumnos;
		}
		$pdf = App::make('dompdf.wrapper');

			$pdf->loadHTML('<center><h1>INSTITUTO TECNOLOGICO DE CULIACAN</h1></center>'.
				'<br>'.
				'<center><h1>Gestor de Grupos por Materias</h1></center>'.
				'<center><h4>No. Alumnos: '.$noalumnos.'</h4></center>'.
				'<center><h4>Grupo: '.$grupoid.'</h4></center>'.
				'<center><h4>Maestro: '.$maestro.'</h4></center>'.
				'<center><h4>Aula: '.$aula.'</h4></center>'.
				'<center><b>'.$alumnos[0]->id_alumno.' -'.$alumnos[0]->alumno.'<b></center>'.
				'<center><b>'.$alumnos[1]->id_alumno.' -'.$alumnos[1]->alumno.'<b></center>'.
				'<center><b>'.$alumnos[2]->id_alumno.' -'.$alumnos[2]->alumno.'<b></center>'.
				'<center><b>'.$alumnos[3]->id_alumno.' -'.$alumnos[3]->alumno.'<b></center>'.
				'<center><b>'.$alumnos[4]->id_alumno.' -'.$alumnos[4]->alumno.'<b></center>'.
				'<center><b>'.$alumnos[5]->id_alumno.' -'.$alumnos[5]->alumno.'<b></center>'.
				'<center><b>'.$alumnos[6]->id_alumno.' -'.$alumnos[6]->alumno.'<b></center>'.
				'<center><b>'.$alumnos[7]->id_alumno.' -'.$alumnos[7]->alumno.'<b></center>'.
				'<center><b>'.$alumnos[8]->id_alumno.' -'.$alumnos[8]->alumno.'<b></center>');
	

		return $pdf->stream();

}]);