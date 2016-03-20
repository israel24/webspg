<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\JustificaionGeneral;
use App\PropositosGenerale;
use App\PlanGlobal;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class JustificaionGeneralController extends Controller
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
        $justificaiongeneral = JustificaionGeneral::paginate(15);

        return view('admin.justificaiongeneral.index', compact('justificaiongeneral'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.justificaiongeneral.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['razon_de_ser_la_asignatura' => 'required', 'por_que_se_ensena_y_por_que_esta_dentro_del_plan_de_estudios' => 'required', 'en_que_medida_contribuye_a_la_formacion_integral_del_profesional' => 'required', ]);

        $JustificaionGeneral=JustificaionGeneral::create($request->all());

        Session::flash('flash_message', 'JustificaionGeneral added!');
          
          $planglobal = $JustificaionGeneral->plan_global_id;


        return redirect('admin/planglobal/' . $planglobal . '/createpropositosgenerales');
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
        $justificaiongeneral = JustificaionGeneral::findOrFail($id);

        return view('admin.justificaiongeneral.show', compact('justificaiongeneral'));
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
        $justificaiongeneral = JustificaionGeneral::findOrFail($id);
        $planglobal = PlanGlobal::findOrFail($justificaiongeneral->plan_global_id);

        return view('admin.justificaiongeneral.edit', compact('justificaiongeneral','planglobal'));
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
        $this->validate($request, ['razon_de_ser_la_asignatura' => 'required', 'por_que_se_ensena_y_por_que_esta_dentro_del_plan_de_estudios' => 'required', 'en_que_medida_contribuye_a_la_formacion_integral_del_profesional' => 'required', ]);

        $justificaiongeneral = JustificaionGeneral::findOrFail($id);
        $justificaiongeneral->update($request->all());

        Session::flash('flash_message', 'JustificaionGeneral updated!');

          
        $PropositosGenerale= PropositosGenerale::where("plan_global_id","=",$justificaiongeneral->plan_global_id)->first();


        return redirect('admin/propositosgenerales/' .  $PropositosGenerale->id . '/edit');
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

        $JustificaionGeneral=JustificaionGeneral::findOrFail($id);
        JustificaionGeneral::destroy($id);

        Session::flash('flash_message', 'JustificaionGeneral deleted!');


        $planglobal = $JustificaionGeneral->plan_global_id;


        return redirect('admin/materia/'.$planglobal.'/showplanglobal');



    }



        public function createjustificaiongeneral( $plan )
        {
        $planglobal = PlanGlobal::findOrFail($plan);
        return view('admin.justificaiongeneral.create', compact('plan','planglobal'));
        }
 


}
