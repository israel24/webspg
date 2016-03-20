<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\SubArea;
use App\Area;
use App\Materium;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class SubAreaController extends Controller
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
        $subarea = SubArea::paginate(15);

        return view('admin.subarea.index', compact('subarea'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.subarea.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nombre_subarea' => 'required', ]);

        $SubArea=SubArea::create($request->all());

        Session::flash('flash_message', 'SubArea added!');

        $SubArea->materias()->attach($request->input('materium_id'));
         

         $area= $SubArea->area;

         return view('admin.area.show', compact('area'));

        
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
        $subarea = SubArea::findOrFail($id);
        $materia_sub_area=SubArea::find($id)->materias;

        return view('admin.subarea.show', compact('subarea','materia_sub_area'));
        
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
        $subarea = SubArea::findOrFail($id);

        $materia_sub_area=SubArea::find($id)->materias()->lists('materium_id')->toArray();
        $materias=Materium::lists('nombre_materia', 'id');

        return view('admin.subarea.edit', compact('subarea','materia_sub_area','materias'));
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
        $this->validate($request, ['nombre_subarea' => 'required', ]);

        $subarea = SubArea::findOrFail($id);
        $subarea->update($request->all());
         if($subarea->materias->count()) {

               $subarea->materias()->detach($subarea->materias()->lists('materium_id')->toArray());
            }
          //  $user->roles()->attach($admin->id); // id only
        $subarea->materias()->attach($request->input('materium_id'));
        
        Session::flash('flash_message', 'SubArea updated!');

        $area= $subarea->area;

         return view('admin.area.show', compact('area'));
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
        $SubArea=SubArea::findOrFail($id);

        SubArea::destroy($id);


        Session::flash('flash_message', 'SubArea deleted!');
        
        $area= $SubArea->area;

         return view('admin.area.show', compact('area'));

       
    }


         public function createsubarea( $area )
    {
        
        $areap = Area::findOrFail($area);

        $materias=Materium::lists('nombre_materia', 'id');


        return view('admin.subarea.create', compact('areap','area','materias'));
    }


}
