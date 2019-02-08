<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Motherboard;

class MotherboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motherboards = Motherboard::all();

        return view('motherboards.index', compact('motherboards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('motherboards.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $motherboard = new Motherboard;

        $motherboard->name = $request->name;
        $motherboard->productcode = $request->productcode;
        $motherboard->brand = $request->brand;
        $motherboard->socket = $request->socket;
        $motherboard->chipset = $request->chipset;
        $motherboard->size = $request->size;

        $motherboard->save();

        Motherboard::create($request->all());

        return redirect('motherboards.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $motherboard = Motherboard::find($id);

        return view('motherboards.show', compact('motherboard'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $motherboard = Motherboard::find($id);

        return view('motherboards.edit', compact('motherboard'));
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
        $motherboard = Motherboard::find($id);

        $motherboard->name = $request->name;
        $motherboard->productcode = $request->productcode;
        $motherboard->brand = $request->brand;
        $motherboard->socket = $request->socket;
        $motherboard->chipset = $request->chipset;
        $motherboard->size = $request->size;

        $motherboard->save();

        return redirect('motherboards');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $motherboard = Motherboard::find($id);

        $motherboard->delete();

        return redirect('motherboards');
    }
}
