<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\PropositosGenerale;
use App\ObjetivosGenerale;

use App\PlanGlobal;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class PropositosGeneralesController extends Controller
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
        $propositosgenerales = PropositosGenerale::paginate(15);

        return view('admin.propositosgenerales.index', compact('propositosgenerales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.propositosgenerales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['propositos_generales' => 'required', ]);

        $PropositosGenerale=PropositosGenerale::create($request->all());

        Session::flash('flash_message', 'PropositosGenerale added!');

        $planglobal = $PropositosGenerale->plan_global_id;


        return redirect('admin/planglobal/' . $planglobal . '/createobjetivosgenerales');

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
        $propositosgenerale = PropositosGenerale::findOrFail($id);

        return view('admin.propositosgenerales.show', compact('propositosgenerale'));
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
        $propositosgenerale = PropositosGenerale::findOrFail($id);
        $planglobal = PlanGlobal::findOrFail($propositosgenerale->plan_global_id);

        return view('admin.propositosgenerales.edit', compact('propositosgenerale','planglobal'));
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
        $this->validate($request, ['propositos_generales' => 'required', ]);

        $propositosgenerale = PropositosGenerale::findOrFail($id);
        $propositosgenerale->update($request->all());

        Session::flash('flash_message', 'PropositosGenerale updated!');


        
        $ObjetivosGenerale= ObjetivosGenerale::where("plan_global_id","=",$propositosgenerale->plan_global_id)->first();


        return redirect('admin/objetivosgenerales/' .  $ObjetivosGenerale->id . '/edit');

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

        $PropositosGenerale=PropositosGenerale::findOrFail($id);

        PropositosGenerale::destroy($id);

        Session::flash('flash_message', 'PropositosGenerale deleted!');


        $planglobal = $PropositosGenerale->plan_global_id;


        return redirect('admin/materia/'.$planglobal.'/showplanglobal');


    }

         public function createpropositosgenerales( $plan )
    {
        $planglobal = PlanGlobal::findOrFail($plan);
        return view('admin.propositosgenerales.create', compact('plan','planglobal'));
    }
    
}
