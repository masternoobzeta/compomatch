<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Memory;

class MemoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $memories = Memory::all();

        return view('memories.index', compact('memories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('memories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $memory = new Memory;

        $memory->name = $request->name;
        $memory->productcode = $request->productcode;
        $memory->brand = $request->brand;
        $memory->size = $request->size;
        $memory->storage = $request->storage;
        $memory->speed = $request->speed;

        $memory->save();

        Memory::create($request->all());

        return redirect('memories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $memory = Memory::find($id);

        return view('memories.show', compact('memory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $memory = Memory::find($id);

        return view('memories.show', compact('memory'));
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
        $memory = Memory::find($id);

        $memory->name = $request->name;
        $memory->productcode = $request->productcode;
        $memory->brand = $request->brand;
        $memory->size = $request->size;
        $memory->storage = $request->storage;
        $memory->speed = $request->speed;

        $memory->save();

        return redirect('memories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $memory = Memory::find($id);

        $memory->delete();

        return redirect('memories');
    }
}
