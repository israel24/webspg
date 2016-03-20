<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\PlanGlobal;
use App\materium;


use App\JustificaionGeneral;
use App\Unidade;
use App\PropositosGenerale;
use App\ObjetivosGenerale;
use App\Evaluacion;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class PlanGlobalController extends Controller
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
        $planglobal = PlanGlobal::paginate(15);

        return view('admin.planglobal.index', compact('planglobal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.planglobal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['materium_id' => 'required','nombre_plan_global', 'sigla_plan_global' , 'codigo', ]);

        $PlanGlobal=PlanGlobal::create($request->all());



         $materia = Materium::findOrFail($request->input('materium_id'));

        $todosPLan=$materia->planglobal;


        if($request->input('estado')==1) {

          foreach ($todosPLan as $iten) {
              if($iten->id!=$PlanGlobal->id){

              $iten->estado=0;
              $iten->save();
          }
          }
        }



        Session::flash('flash_message', 'PlanGlobal added!');

      // $materium = $PlanGlobal->materium;

        //return view('admin.materia.show', compact('materium'));
            
   return redirect('admin/planglobal/' . $PlanGlobal->id . '/createjustificaiongeneral');

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
        $planglobal = PlanGlobal::findOrFail($id);

        return view('admin.planglobal.show', compact('planglobal'));
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
        $planglobal = PlanGlobal::findOrFail($id);
        $materia=$planglobal->materium;
        
         $JustificaionGeneral = JustificaionGeneral::where("plan_global_id","=",$id)->first();
         
         if(empty($JustificaionGeneral)){

            $JustificaionGeneral= new JustificaionGeneral;
            $JustificaionGeneral->plan_global_id=$id;
            $JustificaionGeneral->save();
         }


         $PropositosGenerale = PropositosGenerale::where("plan_global_id","=",$id)->first();
         
         if(empty($PropositosGenerale)){

            $PropositosGenerale= new PropositosGenerale;
            $PropositosGenerale->plan_global_id=$id;
            $PropositosGenerale->save();
         }

        $ObjetivosGenerale= ObjetivosGenerale::where("plan_global_id","=",$id)->first();
         
         if(empty($ObjetivosGenerale)){

            $ObjetivosGenerale= new ObjetivosGenerale;
            $ObjetivosGenerale->plan_global_id=$id;
            $ObjetivosGenerale->save();
         }


         $Unidade = Unidade::where("plan_global_id","=",$id)->first();
         
         if(empty($Unidade)){

            $Unidade= new Unidade;
            $Unidade->plan_global_id=$id;
            $Unidade->save();
         }



         $Evaluacion = Evaluacion::where("plan_global_id","=",$id)->first();
         
         if(empty($Evaluacion)){

            $Evaluacion= new Evaluacion;
            $Evaluacion->plan_global_id=$id;
            $Evaluacion->save();
         }

        return view('admin.planglobal.edit', compact('planglobal','materia'));
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
        $this->validate($request, ['nombre_plan_global' => 'required', 'sigla_plan_global' => 'required', 'codigo' => 'required', ]);

        $planglobal = PlanGlobal::findOrFail($id);
        $planglobal->update($request->all());





         $materia = Materium::findOrFail($planglobal->materium_id);

        $todosPLan=$materia->planglobal;


        if($request->input('estado')==1) {

          foreach ($todosPLan as $iten) {
              if($iten->id!=$id){

              $iten->estado=0;
              $iten->save();
          }
          }
        }

        Session::flash('flash_message', 'PlanGlobal updated!');
       
        $JustificaionGeneral = JustificaionGeneral::where("plan_global_id","=",$id)->first();
         
         $JustificaionGeneral=$JustificaionGeneral->id;
     
       
        return redirect('admin/justificaiongeneral/' .$JustificaionGeneral. '/edit');
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
        $PlanGlobal= PlanGlobal::findOrFail($id);
           PlanGlobal::destroy($id);

        Session::flash('flash_message', 'PlanGlobal deleted!');

        $materium = $PlanGlobal->materium;

        return view('admin.materia.show', compact('materium'));
    }



        public function createplanglobal( $mate )
    {
        $materia = Materium::findOrFail($mate);
        
        $date = Carbon::now();

        


        return view('admin.planglobal.create', compact('mate','materia','date'));
    }

   public function showplanglobal ( $mate ){

        $planglobal = PlanGlobal::findOrFail($mate);

        return view('admin.planglobal.show', compact('planglobal'));

   }

}
