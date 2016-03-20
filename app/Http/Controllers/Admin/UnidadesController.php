<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Unidade;
use App\PlanGlobal;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class UnidadesController extends Controller
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
        $unidades = Unidade::all();

        return view('admin.unidades.index', compact('unidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.unidades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nombre_de_la_unidad' => 'required', 'duracion_de_la_unidad_en_periodos_academicos' => 'required', 'objetivo_de_la_unidad' => 'required', ]);

       $unidade=Unidade::create($request->all());

        Session::flash('flash_message', 'Unidade added!');
        $planglobal = $unidade->plan_global_id;

                if($request->input('registra')==1) {

                return redirect('admin/planglobal/' . $planglobal . '/createunidades');
                

                }

             if($request->input('registra')==0) {

             return redirect('admin/planglobal/' . $planglobal. '/createevaluacion');
            }

            if($request->input('registra')==4) {


                return redirect('admin/planglobal/' . $planglobal . '/createunidadesu');
            }

            $plan=$planglobal;

            $planglobal = PlanGlobal::findOrFail($plan);

           $unidades=$planglobal->unidade;

            return view('admin.unidades.show', compact('unidades','plan','planglobal'));
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
        $unidade = Unidade::findOrFail($id);

        $planglobal = PlanGlobal::findOrFail($unidade->plan_global_id);

        return view('admin.unidades.show', compact('unidade','planglobal'));
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
        $unidade = Unidade::findOrFail($id);
        $planglobal = PlanGlobal::findOrFail($unidade->plan_global_id);

        return view('admin.unidades.edit', compact('unidade','planglobal'));
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
        $this->validate($request, ['nombre_de_la_unidad' => 'required', 'duracion_de_la_unidad_en_periodos_academicos' => 'required', 'objetivo_de_la_unidad' => 'required', ]);

        $unidade = Unidade::findOrFail($id);
        $unidade->update($request->all());

        Session::flash('flash_message', 'Unidade updated!');


        $unidades=Unidade::findOrFail($id);
        $plan=$unidades->plan_global_id;
    

        $planglobal = PlanGlobal::findOrFail($plan);

       $unidades=$planglobal->unidade;
    
         return view('admin.unidades.show', compact('unidades','plan','planglobal'));
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
    $unidades=Unidade::findOrFail($id);
    $plan=$unidades->plan_global_id;
    
       Unidade::destroy($id);

        Session::flash('flash_message', 'Unidade deleted!');

    $planglobal = PlanGlobal::findOrFail($plan);

    $unidades=$planglobal->unidade;
    
    return view('admin.unidades.show', compact('unidades','plan','planglobal'));
    }




   public function createunidades( $plan )
    {
        
        $planglobal = PlanGlobal::findOrFail($plan);
        return view('admin.unidades.create', compact('plan','planglobal'));
    }


    public function createunidadesu( $plan )
    {
        $planglobal = PlanGlobal::findOrFail($plan);
        return view('admin.unidades.createu', compact('plan','planglobal'));
    }


    public function showunidad( $plan ){


    $planglobal = PlanGlobal::findOrFail($plan);

    $unidades=$planglobal->unidade;

    return view('admin.unidades.show', compact('unidades','plan','planglobal'));

   }


}
