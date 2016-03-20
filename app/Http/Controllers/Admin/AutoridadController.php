<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Autoridad;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class AutoridadController extends Controller
{


      public function __construct(){
        parent::__construct();
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $autoridad = Autoridad::paginate(15);

        return view('admin.autoridad.index', compact('autoridad'));
    }

    public function indexa()
    {
        $autoridad = Autoridad::paginate(15);

        return view('admin.autoridad.indexa', compact('autoridad'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.autoridad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nombre' => 'required', 'codigo' => 'required', 'cargo' => 'required', ]);

        Autoridad::create($request->all());

        Session::flash('flash_message', 'Autoridad added!');

        return redirect('admin/autoridad');
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
        $autoridad = Autoridad::findOrFail($id);

        return view('admin.autoridad.show', compact('autoridad'));
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
        $autoridad = Autoridad::findOrFail($id);

        return view('admin.autoridad.edit', compact('autoridad'));
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
        $this->validate($request, ['nombre' => 'required', 'codigo' => 'required', 'cargo' => 'required', ]);

        $autoridad = Autoridad::findOrFail($id);
        $autoridad->update($request->all());

        Session::flash('flash_message', 'Autoridad updated!');

        return redirect('admin/autoridad');
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
        Autoridad::destroy($id);

        Session::flash('flash_message', 'Autoridad deleted!');

        return redirect('admin/autoridad');
    }

}
