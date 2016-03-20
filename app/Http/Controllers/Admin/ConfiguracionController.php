<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Configuracion;
use App\Image;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class ConfiguracionController extends Controller
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
        $configuracion = Configuracion::paginate(15);

        return view('admin.configuracion.index', compact('configuracion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        
        $image=Image::orderBy('filename', 'asc')->lists('filename', 'filename');

       return view('admin.configuracion.create',compact('image'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nombre' => 'required', ]);

        $configuracion=Configuracion::create($request->all());

        $configuraciontodas=Configuracion::all();

        
        if($request->input('estado')==1) {

          foreach ($configuraciontodas as $iten) {
              if($iten->id!=$configuracion->id){

              $iten->estado=0;
              $iten->save();
          }
          }
        }

        Session::flash('flash_message', 'Configuracion added!');

        return redirect('admin/configuracion');
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
        $configuracion = Configuracion::findOrFail($id);

        return view('admin.configuracion.show', compact('configuracion'));
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
        $configuracion = Configuracion::findOrFail($id);
        $image=Image::orderBy('filename', 'asc')->lists('filename', 'filename');

        return view('admin.configuracion.edit', compact('configuracion','image'));
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
        $this->validate($request, ['nombre' => 'required', ]);

        $configuracion = Configuracion::findOrFail($id);
        $configuracion->update($request->all());

        $configuraciontodas=Configuracion::all();

        
        if($request->input('estado')==1) {

          foreach ($configuraciontodas as $iten) {
              if($iten->id!=$configuracion->id){

              $iten->estado=0;
              $iten->save();
          }
          }
        }

        Session::flash('flash_message', 'Configuracion updated!');

        return redirect('admin/configuracion');
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
        Configuracion::destroy($id);

        Session::flash('flash_message', 'Configuracion deleted!');

        return redirect('admin/configuracion');
    }

}
