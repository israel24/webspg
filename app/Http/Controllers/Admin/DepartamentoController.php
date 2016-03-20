<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Departamento;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;


class DepartamentoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    protected $table = 'departamentos';

    public function __construct(Departamento $departamentos){
        parent::__construct();
        $this->departamentos = $departamentos;
    }


    public function materium($id){
        $departamento = $this->departamentos->findOrFail($id);

        return view('admin.departamento.show', compact('departamento'));
    }


    public function index()
    {
        $departamento = Departamento::paginate(15);
        
        return view('admin.departamento.index', compact('departamento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.departamento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nombre_departamento' => 'required', ]);

        Departamento::create($request->all());

        Session::flash('flash_message', 'Departamento added!');

        return redirect('admin/departamento');
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
        $departamento = Departamento::findOrFail($id);

        return view('admin.departamento.show', compact('departamento'));
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
        $departamento = Departamento::findOrFail($id);

        return view('admin.departamento.edit', compact('departamento'));
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
        $this->validate($request, ['nombre_departamento' => 'required', ]);

        $departamento = Departamento::findOrFail($id);
        $departamento->update($request->all());

        Session::flash('flash_message', 'Departamento updated!');

        return redirect('admin/departamento');
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
        Departamento::destroy($id);

        Session::flash('flash_message', 'Departamento deleted!');

        return redirect('admin/departamento');
    }

}
