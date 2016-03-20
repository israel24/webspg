<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Evaluacion;
use App\PlanGlobal;
use App\Materium;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class EvaluacionController extends Controller
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
        $evaluacion = Evaluacion::paginate(15);

        return view('admin.evaluacion.index', compact('evaluacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.evaluacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['evaluacion' => 'required', ]);

        $evaluacion=Evaluacion::create($request->all());

        Session::flash('flash_message', 'Evaluacion added!');
        $planglobal = PlanGlobal::findOrFail($evaluacion->plan_global_id);
        $materium = Materium::findOrFail($planglobal->materium_id);

        return view('admin.materia.show', compact('materium'));
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
        $evaluacion = Evaluacion::findOrFail($id);

        return view('admin.evaluacion.show', compact('evaluacion'));
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

        $Evaluacion= Evaluacion::where("plan_global_id","=",$id)->first();


        $evaluacion = Evaluacion::findOrFail($Evaluacion->id);
       
        $planglobal = PlanGlobal::findOrFail($id);

        return view('admin.evaluacion.edit', compact('evaluacion','planglobal'));
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
        $this->validate($request, ['evaluacion' => 'required', ]);

        $evaluacion = Evaluacion::findOrFail($id);
        $evaluacion->update($request->all());

        Session::flash('flash_message', 'Evaluacion updated!');

         $evaluacion = Evaluacion::findOrFail($id);

        $planglobal = PlanGlobal::findOrFail($evaluacion->plan_global_id);
        $materium = Materium::findOrFail($planglobal->materium_id);

        return view('admin.materia.show', compact('materium'));
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

        $evaluacion = Evaluacion::findOrFail($id);

        Evaluacion::destroy($id);

        Session::flash('flash_message', 'Evaluacion deleted!');



        $planglobal = $evaluacion->plan_global_id;


        return redirect('admin/materia/'.$planglobal.'/showplanglobal');


    }

         public function createevaluacion( $plan )
    {
        $planglobal = PlanGlobal::findOrFail($plan);
        return view('admin.evaluacion.create', compact('plan','planglobal'));
    }

}
