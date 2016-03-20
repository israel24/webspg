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
/*
Route::get('/', function () {
    return view('welcome');
});



*/



Route::get('/', [
    'as' => 'inicio.index',
    'uses' => 'SistemaUnoController@indexSistema',
]);

Route::get('/home', [
    'as' => 'inicio.home',
    'uses' => 'SistemaUnoController@indexHome',
]);

Route::get('/organigrama', [
    'as' => 'inicio.organigrama',
    'uses' => 'SistemaUnoController@indexOrganigrama',
]);





Route::resource('admin/carreras', 'Admin\\CarrerasController');
Route::resource('admin/docentes', 'Admin\\DocentesController');
Route::resource('admin/autoridad', 'Admin\\AutoridadController');

Route::resource('admin/planglobal', 'Admin\\PlanGlobalController');


Route::resource('admin/area', 'Admin\\AreaController');
Route::resource('admin/subarea', 'Admin\\SubAreaController');
Route::resource('admin/departamento', 'Admin\\DepartamentoController');




Route::resource('admin/materia', 'Admin\\MateriaController');

Route::get('admin/departamento/{depa}/materia/{mate}/updatemateria', ['as' => 'departamento.materia.update','uses' => 'Admin\\MateriaController@updatemateria',]);
Route::get('admin/departamento/{depa}/createmateria', ['as' => 'departamento.materia.create','uses' => 'Admin\\MateriaController@createmateria',]);
Route::get('admin/materia/{mate}/createplanglobal', ['as' => 'materia.planglobal.create','uses' => 'Admin\\PlanGlobalController@createplanglobal',]);

Route::get('admin/materia/{mate}/creategrupo', 
    ['as' => 'materia.grupo.create',
    'uses' => 'Admin\\GrupoController@creategrupo',]);

Route::get('admin/materia/{mate}/indexgrupo', 
    ['as' => 'materia.grupo.index',
    'uses' => 'Admin\\GrupoController@indexgrupo',]);



Route::get('admin/materia/{mate}/showplanglobal', ['as' => 'materia.planglobal.show','uses' => 'Admin\\PlanGlobalController@showplanglobal',]);

Route::get('admin/area/{area}/createsubarea', ['as' => 'area.subarea.create','uses' => 'Admin\\SubAreaController@createsubarea',]);

Route::get('admin/planglobal/{plan}/createjustificaiongeneral', ['as' => 'materia.planglobal.justificaiongeneralcreate','uses' => 'Admin\\JustificaionGeneralController@createjustificaiongeneral',]);

Route::get('admin/planglobal/{plan}/createpropositosgenerales', ['as' => 'materia.planglobal.propositosgeneralescreate','uses' => 'Admin\\PropositosGeneralesController@createpropositosgenerales',]);

Route::get('admin/planglobal/{plan}/createobjetivosgenerales', ['as' => 'materia.planglobal.objetivosgeneralescreate','uses' => 'Admin\\ObjetivosGeneralesController@createobjetivosgenerales',]);

Route::get('admin/planglobal/{plan}/createunidades', ['as' => 'materia.planglobal.unidadescreate','uses' => 'Admin\\UnidadesController@createunidades',]);
Route::get('admin/planglobal/{plan}/createunidadesu', ['as' => 'materia.planglobal.unidadescreateu','uses' => 'Admin\\UnidadesController@createunidadesu',]);




Route::get('admin/planglobal/{plan}/showunidad', ['as' => 'materia.planglobal.unidades.show','uses' => 'Admin\\UnidadesController@showunidad',]);

Route::get('admin/planglobal/{plan}/createevaluacion', ['as' => 'materia.planglobal.evaluacioncreate','uses' => 'Admin\\EvaluacionController@createevaluacion',]);


//Route::get('admin/unidad/{uni}/createmetodologiaensenanza', ['as' => 'materia.planglobal.unidades.metodologiaensenanzacreate','uses' => 'Admin\\MetodologiaEnsenanzaController@createmetodologiaensenanza',]);

//Route::get('admin/unidad/{uni}/createcontenido', ['as' => 'materia.planglobal.unidades.contenidocreate','uses' => 'Admin\\ContenidoController@createcontenido',]);


//Route::get('admin/materia/{depa}/materia/{mate}', 'Admin\\MateriaController@updatemateria');
//Route::get('admin/materia/{var1}/{var2}','controlador@funcion_creada');
Route::resource('admin/justificaiongeneral', 'Admin\\JustificaionGeneralController');
Route::resource('admin/propositosgenerales', 'Admin\\PropositosGeneralesController');
Route::resource('admin/objetivosgenerales', 'Admin\\ObjetivosGeneralesController');
//Route::resource('admin/unidades', 'Admin\\UnidadesController');

//Route::resource('admin/metodologiaensenanza', 'Admin\\MetodologiaEnsenanzaController');
Route::resource('admin/evaluacion', 'Admin\\EvaluacionController');



Route::resource('admin/permissions', 'Admin\\PermissionsController');
Route::resource('admin/roles', 'Admin\\RolesController');
Route::resource('admin/permissions', 'Admin\\PermissionsController');
Route::resource('admin/users', 'Admin\\UsersController');

Route::get('carreras', [
    'as' => 'admin.carreras.indexc',
    'uses' => 'Admin\\CarrerasController@indexc',
]);


Route::get('autoridades', [
    'as' => 'admin.autoridad.indexa',
    'uses' => 'Admin\\AutoridadController@indexa',
]);

Route::get('/wil', ['as' => 'upload', 'uses' => 'ImageController@getUpload']);
Route::post('upload', ['as' => 'upload-post', 'uses' =>'ImageController@postUpload']);
Route::post('upload/delete', ['as' => 'upload-remove', 'uses' =>'ImageController@deleteUpload']);

Route::resource('sistemaUnos', 'SistemaUnoController');

Route::get('sistemaUnos/{id}/delete', [
    'as' => 'sistemaUnos.delete',
    'uses' => 'SistemaUnoController@destroy',
]);

Route::resource('admin/sistema', 'Admin\\SistemaController');
Route::resource('admin/sistemapg', 'Admin\\SistemapgController');
Route::resource('admin/image', 'Admin\\ImageController');


Route::resource('cli/materia', 'Cli\\MateriaController');


Route::resource('cli/carreras', 'Cli\\CarrerasController');

Route::resource('temas', 'temaController');

Route::get('temas/{id}/delete', [
    'as' => 'temas.delete',
    'uses' => 'temaController@destroy',
]);

Route::resource('admin/unidades', 'Admin\\UnidadesController');
Route::resource('admin/grupo', 'Admin\\GrupoController');

Route::resource('admin/configuracion', 'Admin\\ConfiguracionController');