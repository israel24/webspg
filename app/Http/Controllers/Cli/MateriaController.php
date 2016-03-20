<?php

namespace App\Http\Controllers\Cli;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Materium;
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
    public function index()
    {
        $materia = Materium::paginate(15);

        return view('cli.materia.index', compact('materia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('cli.materia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nombre_materia' => 'required', 'sigla_materia' => 'required', 'codigo' => 'required', ]);

        Materium::create($request->all());

        Session::flash('flash_message', 'Materium added!');

        return redirect('cli/materia');
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

        return view('cli.materia.show', compact('materium'));
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

        return view('cli.materia.edit', compact('materium'));
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
        $this->validate($request, ['nombre_materia' => 'required', 'sigla_materia' => 'required', 'codigo' => 'required', ]);

        $materium = Materium::findOrFail($id);
        $materium->update($request->all());

        Session::flash('flash_message', 'Materium updated!');

        return redirect('cli/materia');
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
        Materium::destroy($id);

        Session::flash('flash_message', 'Materium deleted!');

        return redirect('cli/materia');
    }

}
