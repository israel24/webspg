<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Grupo;
use App\Materium;
use App\Docente;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class GrupoController extends Controller
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
        $grupo = Grupo::paginate(15);

        return view('admin.grupo.index', compact('grupo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.grupo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['grupo' => 'required', ]);

        $grup=Grupo::create($request->all());

          //no permite control doble
        $materia = Materium::findOrFail($request->input('materium_id'));

        $todosGrupos=$materia->grupo;

        
        if($request->input('control_de_plan_global')==1) {

          foreach ($todosGrupos as $iten) {
              if($iten->id!=$grup->id){

              $iten->control_de_plan_global=0;
              $iten->save();
          }
          }
        }

        //no permite control doble    
            
        Session::flash('flash_message', 'Grupo added!');

        
        $mate=$request->input('materium_id');

        $grupo=$materia->grupo;

        return view('admin.grupo.index', compact('grupo','mate','materia'));
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
        $grupo = Grupo::findOrFail($id);

        return view('admin.grupo.show', compact('grupo'));
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
        $grupo = Grupo::findOrFail($id);
         $docente=Docente::orderBy('nombre', 'asc')->lists('nombre', 'id');
         $materia = Materium::findOrFail($grupo->materium_id);

        return view('admin.grupo.edit', compact('grupo','docente','materia'));
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
        $this->validate($request, ['grupo' => 'required', ]);

        $grupo = Grupo::findOrFail($id);
        $grupo->update($request->all());

        $grup = Grupo::findOrFail($id);
        //no permite control doble

        $materia = Materium::findOrFail($grup->materium_id);

        $todosGrupos=$materia->grupo;


        if($request->input('control_de_plan_global')==1) {

          foreach ($todosGrupos as $iten) {
              if($iten->id!=$grup->id){

              $iten->control_de_plan_global=0;
              $iten->save();
          }
          }
        }
        //no permite control doble

        Session::flash('flash_message', 'Grupo updated!');

       $materia = Materium::findOrFail($grupo->materium_id);
        $mate=$grupo->materium_id;

        $grupo=$materia->grupo;

        return view('admin.grupo.index', compact('grupo','mate','materia'));
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
        $grupo = Grupo::findOrFail($id);
        Grupo::destroy($id);

        Session::flash('flash_message', 'Grupo deleted!');

        $materia = Materium::findOrFail($grupo->materium_id);
        $mate=$grupo->materium_id;

        $grupo=$materia->grupo;

        return view('admin.grupo.index', compact('grupo','mate','materia'));
    }


        public function creategrupo( $mate )
    {
        $materia = Materium::findOrFail($mate);

        $docente=Docente::orderBy('nombre', 'asc')->lists('nombre', 'id');

        return view('admin.grupo.create', compact('mate','materia','docente'));
    }

  public function indexgrupo( $mate ){

        $materia = Materium::findOrFail($mate);
        

               $grupo=$materia->grupo;

        return view('admin.grupo.index', compact('grupo','mate','materia'));

        
   }


}
