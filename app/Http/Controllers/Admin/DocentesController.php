<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Docente;
use App\Grupo;
use DB;
use App\Materium;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class DocentesController extends Controller
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
        $docentes = Docente::paginate(15);

        return view('admin.docentes.index', compact('docentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nombre' => 'required', 'codigo' => 'required', 'CI' => 'required', ]);

        Docente::create($request->all());

        Session::flash('flash_message', 'Docente added!');

        return redirect('admin/docentes');
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
        $docente = Docente::findOrFail($id);
        
         $grupo = DB::table('grupos')
         ->join('materias', 'grupos.materium_id', '=', 'materias.id')
         ->where('docente_id','=',$id)->get();

        
        return view('admin.docentes.show', compact('docente','grupo'));
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
        $docente = Docente::findOrFail($id);

        return view('admin.docentes.edit', compact('docente'));
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
        $this->validate($request, ['nombre' => 'required', 'codigo' => 'required', 'CI' => 'required', ]);

        $docente = Docente::findOrFail($id);
        $docente->update($request->all());

        Session::flash('flash_message', 'Docente updated!');

        return redirect('admin/docentes');
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
        Docente::destroy($id);

        Session::flash('flash_message', 'Docente deleted!');

        return redirect('admin/docentes');
    }

}
