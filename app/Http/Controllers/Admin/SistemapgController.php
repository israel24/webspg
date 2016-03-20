<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Sistemapg;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class SistemapgController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $sistemapg = Sistemapg::paginate(15);

        return view('admin.sistemapg.index', compact('sistemapg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.sistemapg.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nombre_de_facultad' => 'required', 'descripcion' => 'required', ]);

        Sistemapg::create($request->all());

        Session::flash('flash_message', 'Sistemapg added!');

        return redirect('admin/sistemapg');
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
        $sistemapg = Sistemapg::findOrFail($id);

        return view('admin.sistemapg.show', compact('sistemapg'));
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
        $sistemapg = Sistemapg::findOrFail($id);

        return view('admin.sistemapg.edit', compact('sistemapg'));
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

        $sistemapg = Sistemapg::findOrFail($id);
        $sistemapg->update($request->all());

        Session::flash('flash_message', 'Sistemapg updated!');

        return redirect('admin/sistemapg');
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
        Sistemapg::destroy($id);

        Session::flash('flash_message', 'Sistemapg deleted!');

        return redirect('admin/sistemapg');
    }

}
