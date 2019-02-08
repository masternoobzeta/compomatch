<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videocard;

class VideocardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videocards = Videocard::all();

        return view('videocards.index', compact('videocards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('videocards.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $videocard = new Videocard;

        $videocard->name = $request->name;
        $videocard->productcode = $request->productcode;
        $videocard->brand = $request->brand;
        $videocard->gpu = $request->gpu;
        $videocard->serie = $request->serie;
        $videocard->memory = $request->memory;

        $videocard->save();

        Videocard::create($request->all());

        return redirect('videocards');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $videocard = Videocard::find($id);

        return view('videocards.show', compact('videocard'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $videocard = Videocard::find($id);

        return view('videocards.edit', compact('videocard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $videocard = Videocard::find($id);

        $videocard->name = $request->name;
        $videocard->productcode = $request->productcode;
        $videocard->brand = $request->brand;
        $videocard->gpu = $request->gpu;
        $videocard->serie = $request->serie;
        $videocard->memory = $request->memory;

        $videocard->save();

        return redirect('videocards');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $videocard = Videocard::find($id);

        $videocard->delete();

        return redirect('videocards');
    }
}
