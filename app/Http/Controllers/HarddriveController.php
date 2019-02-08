<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Harddrive;

class HarddriveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $harddrives = Harddrive::all();

        return view('harddrives.index', compact('harddrives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('harddrives.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $harddrive = new Harddrive;

        $harddrive->name = $request->name;
        $harddrive->productcode = $request->productcode;
        $harddrive->brand = $request->brand;
        $harddrive->type = $request->type;
        $harddrive->size = $request->size;
        $harddrive->storage = $request->storage;

        $harddrive->save();

        Harddrive::create($request->all());

        return redirect('harddrives');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $harddrive = Harddrive::find($id);

        return view('harddrives.show', compact('harddrive'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $harddrive = Harddrive::find($id);

        return view('harddrives.edit', compact('harddrive'));
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
        $harddrive = Harddrive::find($id);

        $harddrive->name = $request->name;
        $harddrive->productcode = $request->productcode;
        $harddrive->brand = $request->brand;
        $harddrive->type = $request->type;
        $harddrive->size = $request->size;
        $harddrive->storage = $request->storage;

        $harddrive->save();

        return redirect('harddrives');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $harddrive = Harddrive::find($id);

        $harddrive->delete();

        return redirect('harddrives');
    }
}
