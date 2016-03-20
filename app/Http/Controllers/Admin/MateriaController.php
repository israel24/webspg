<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Materium;
use App\Departamento;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class MateriaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    protected $materias;

    public function __construct(Materium $materias){
        parent::__construct();
        $this->materias = $materias;
    }


    public function departamento($id){
        $materia = $this->materias->findOrFail($id);

        return view('admin.materia.show', compact('materia'));
    }


    public function index()
    {
        $materia = Materium::paginate(15);

        return view('admin.materia.index', compact('materia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.materia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [ 'departamento_id' => 'required', 'nombre_materia' => 'required', 'sigla_materia' => 'required', 'codigo' => 'required', ]);

        $materiass=Materium::create($request->all());

        Session::flash('flash_message', 'Materium added!');


       //esto quiero

       $departamento = $materiass->departamento;

        return view('admin.departamento.show', compact('departamento'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $materium = Materium::findOrFail($id);

        return view('admin.materia.show', compact('materium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $materium = Materium::findOrFail($id);

        return view('admin.materia.edit', compact('materium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [ 'nombre_materia' => 'required', 'sigla_materia' => 'required', 'codigo' => 'required', ]);

        $materium = Materium::findOrFail($id);
        $materium->update($request->all());
        Session::flash('flash_message', 'Materium updated!');
        $departamento = $materium->departamento;

        return view('admin.departamento.show', compact('departamento'));

     }


    public function createmateria($depa)
    {
        $Departamento=Departamento::findOrFail($depa);
        $sigla_materia=$Departamento->nombre_departamento;
        $sigla_materia=$sigla_materia.$depa;
        return view('admin.materia.create', compact('depa','sigla_materia'));
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {   
        $materium = Materium::findOrFail($id);
        Materium::destroy($id);

        Session::flash('flash_message', 'Materium deleted!');

        $departamento = $materium->departamento;

        return view('admin.departamento.show', compact('departamento'));

    }

}
