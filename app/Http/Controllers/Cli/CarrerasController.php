<?php

namespace App\Http\Controllers\Cli;

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
    public function index()
    {
        $carreras = Carrera::paginate(15);

        return view('cli.carreras.index', compact('carreras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('cli.carreras.create');
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

        return redirect('cli/carreras');
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

        return view('cli.carreras.show', compact('carrera'));
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
        $materia_carrera=Carrera::find($id)->materias()->lists('materium_id')->toArray();
        $materias=Materium::lists('nombre_materia', 'id');

        return view('cli.carreras.edit', compact('carrera','materia_carrera','materias'));
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
        

        $carrera = Carrera::findOrFail($id);
        

        if($carrera->materias->count()) {

               $carrera->materias()->detach($carrera->materias()->lists('materium_id')->toArray());
            }
          //  $user->roles()->attach($admin->id); // id only
        $carrera->materias()->attach($request->input('materium_id'));
        Session::flash('flash_message', 'Carrera updated!');

        $carrera = Carrera::findOrFail($id);
        $carrera->with('materias')->get();
        return view('admin.carreras.show', compact('carrera'));
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

        return redirect('cli/carreras');
    }

}
