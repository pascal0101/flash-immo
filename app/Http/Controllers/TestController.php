<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function multifileupload()
    {
        return view('dropzoneJs');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    function upload(Request $request)
    {
        $image_code = '';
        $images = $request->file('file');
        foreach ($images as $image) {
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $new_name);
            $image_code .= '<div class="col-md-3" style="margin-bottom:24px;"><img src="/images/' . $new_name . '" class="img-thumbnail" /></div>';
        }

        $output = array(
            'success'  => 'Images uploaded successfully',
            'image'   => $image_code
        );

        // dd($images);
        return response()->json($output);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        //
    }
    public function index()
    {
        return view('image-view');
    }

    public function store(Request $request)
    {
        $imageName = request()->file->getClientOriginalName();
        request()->file->move(public_path('upload'), $imageName);


        return response()->json(['uploaded' => '/upload/' . $imageName]);
    }
}
