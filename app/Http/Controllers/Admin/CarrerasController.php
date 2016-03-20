<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Carrera;
use App\Materium;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class CarrerasController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
      public function __construct(){
        parent::__construct();
        
    }
    public function index()
    {
        $carreras = Carrera::paginate(15);

        return view('admin.carreras.index', compact('carreras'));
    }

        public function indexc()
    {

       $carreras = Carrera::paginate(15);

        return view('admin.carreras.indexc', compact('carreras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.carreras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nombre' => 'required', 'codigo' => 'required', 'fecha_creacion' => 'required', ]);

        Carrera::create($request->all());

        Session::flash('flash_message', 'Carrera added!');

        return redirect('admin/carreras');
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
        
        $carrera = Carrera::findOrFail($id);
        $carrera->with('materias')->get();
        return view('admin.carreras.show', compact('carrera'));
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
        $carrera = Carrera::findOrFail($id);

        return view('admin.carreras.edit', compact('carrera'));
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
        $this->validate($request, ['nombre' => 'required', 'codigo' => 'required', 'fecha_creacion' => 'required', ]);

        $carrera = Carrera::findOrFail($id);
        $carrera->update($request->all());

        Session::flash('flash_message', 'Carrera updated!');

        return redirect('admin/carreras');
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
        Carrera::destroy($id);

        Session::flash('flash_message', 'Carrera deleted!');

        return redirect('admin/carreras');
    }

}
