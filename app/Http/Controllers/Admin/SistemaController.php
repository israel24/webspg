<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Sistema;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class SistemaController extends Controller
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
        $sistema = Sistema::paginate(15);

        return view('admin.sistema.index', compact('sistema'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.sistema.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nombre_de_facultad' => 'required', 'descripcion' => 'required', ]);

        Sistema::create($request->all());

        Session::flash('flash_message', 'Sistema added!');

        return redirect('admin/sistema');
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
        $sistema = Sistema::findOrFail($id);

        return view('admin.sistema.show', compact('sistema'));
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
        $sistema = Sistema::findOrFail($id);

        return view('admin.sistema.edit', compact('sistema'));
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
        $this->validate($request, ['nombre_de_facultad' => 'required', 'descripcion' => 'required', ]);

        $sistema = Sistema::findOrFail($id);
        $sistema->update($request->all());

        Session::flash('flash_message', 'Sistema updated!');

        return redirect('admin/sistema');
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
        Sistema::destroy($id);

        Session::flash('flash_message', 'Sistema deleted!');

        return redirect('admin/sistema');
    }

}
