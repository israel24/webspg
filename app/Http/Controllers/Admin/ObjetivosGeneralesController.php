<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ObjetivosGenerale;
use App\Unidade;
use App\PlanGlobal;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class ObjetivosGeneralesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $objetivosgenerales = ObjetivosGenerale::paginate(15);

        return view('admin.objetivosgenerales.index', compact('objetivosgenerales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.objetivosgenerales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['objetivos_generales' => 'required', ]);

        $ObjetivosGenerale=ObjetivosGenerale::create($request->all());

        Session::flash('flash_message', 'ObjetivosGenerale added!');

          $planglobal = $ObjetivosGenerale->plan_global_id;


        return redirect('admin/planglobal/' . $planglobal . '/createunidades');
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
        $objetivosgenerale = ObjetivosGenerale::findOrFail($id);

        return view('admin.objetivosgenerales.show', compact('objetivosgenerale'));
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
        $objetivosgenerale = ObjetivosGenerale::findOrFail($id);

        $planglobal = PlanGlobal::findOrFail($objetivosgenerale->plan_global_id);

        return view('admin.objetivosgenerales.edit', compact('objetivosgenerale','planglobal'));
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
        $this->validate($request, ['objetivos_generales' => 'required', ]);

        $objetivosgenerale = ObjetivosGenerale::findOrFail($id);
        $objetivosgenerale->update($request->all());

        Session::flash('flash_message', 'ObjetivosGenerale updated!');

        $objetivosgenerale = ObjetivosGenerale::findOrFail($id);
        
        $plan=$objetivosgenerale->plan_global_id;

        return redirect('admin/planglobal/'.$plan.'/showunidad');
    

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

        $ObjetivosGenerale=ObjetivosGenerale::findOrFail($id);
        ObjetivosGenerale::destroy($id);

        Session::flash('flash_message', 'ObjetivosGenerale deleted!');


        $planglobal = $ObjetivosGenerale->plan_global_id;


        return redirect('admin/materia/'.$planglobal.'/showplanglobal');


    }

         public function createobjetivosgenerales( $plan )
    {
        $planglobal = PlanGlobal::findOrFail($plan);
        return view('admin.objetivosgenerales.create', compact('plan','planglobal'));
    }
    

}
