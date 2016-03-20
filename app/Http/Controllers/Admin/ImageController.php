<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Image;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;


class ImageController extends Controller
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
        $image = Image::paginate(10);

        return view('admin.image.index', compact('image'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.image.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['original_name' => 'required', 'filename' => 'required', ]);

        Image::create($request->all());

        Session::flash('flash_message', 'Image added!');

        return redirect('admin/image');
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
        $image = Image::findOrFail($id);

        return view('admin.image.show', compact('image'));
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
        $image = Image::findOrFail($id);

        return view('admin.image.edit', compact('image'));
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
        $this->validate($request, ['original_name' => 'required', 'filename' => 'required', ]);

        $image = Image::findOrFail($id);
        $image->update($request->all());

        Session::flash('flash_message', 'Image updated!');

        return redirect('admin/image');
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
        Image::destroy($id);


        

        Session::flash('flash_message', 'Image deleted!');

        return redirect('admin/image');
    }

}
