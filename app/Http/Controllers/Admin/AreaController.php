<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Area;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class AreaController extends Controller
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
        $area = Area::paginate(15);

        return view('admin.area.index', compact('area'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.area.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nombre_area' => 'required', 'codigo' => 'required', ]);

        Area::create($request->all());

        Session::flash('flash_message', 'Area added!');

        return redirect('admin/area');
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
        $area = Area::findOrFail($id);

        return view('admin.area.show', compact('area'));
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
        $area = Area::findOrFail($id);

        return view('admin.area.edit', compact('area'));
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
        $this->validate($request, ['nombre_area' => 'required', 'codigo' => 'required', ]);

        $area = Area::findOrFail($id);
        $area->update($request->all());

        Session::flash('flash_message', 'Area updated!');

        return redirect('admin/area');
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
        Area::destroy($id);

        Session::flash('flash_message', 'Area deleted!');

        return redirect('admin/area');
    }

}
