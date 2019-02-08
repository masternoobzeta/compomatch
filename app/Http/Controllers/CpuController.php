<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cpu;

class CpuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cpus = Cpu::all();

        return view('cpus.index', compact('cpus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cpus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cpu = new Cpu;

        $cpu->name = $request->name;
        $cpu->productcode = $request->productcode;
        $cpu->brand = $request->brand;
        $cpu->codename = $request->codename;
        $cpu->core = $request->core;
        $cpu->socket = $request->socket;

        $cpu->save();

        Cpu::created($request->all());

        return redirect('cpus');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cpu = Cpu::find($id);

        return view('cpus.show', compact('cpu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cpu = Cpu::find($id);

        return view('cpus.edit', compact('cpu'));
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
        $cpu = Cpu::find($id);

        $cpu->name = $request->name;
        $cpu->productcode = $request->productcode;
        $cpu->brand = $request->brand;
        $cpu->codename = $request->codename;
        $cpu->core = $request->core;
        $cpu->socket = $request->socket;

        $cpu->save();

        return redirect('cpus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cpu = Cpu::find($id);

        $cpu->delete();

        return redirect('cpus');
    }
}
