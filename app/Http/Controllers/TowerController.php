<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tower;

class TowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $towers = Tower::all();

        return view('towers.index', compact('towers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('towers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tower = new Tower;

        $tower->name = $request->name;
        $tower->productcode = $request->productcode;
        $tower->brand = $request->brand;
        $tower->color = $request->color;
        $tower->width = $request->width;
        $tower->height = $request->height;
        $tower->depth = $request->depth;

        Tower::create($request->all());

        return redirect('towers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tower = Tower::find($id);

        return view('towers.show', compact('tower'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tower = Tower::find($id);

        return view('towers.edit', compact('tower'));
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
        $tower = Tower::find($id);

        $tower->name = $request->name;
        $tower->productcode = $request->productcode;
        $tower->brand = $request->brand;
        $tower->color = $request->color;
        $tower->width = $request->width;
        $tower->height = $request->height;
        $tower->depth = $request->depth;

        Tower::create($request->all());

        return redirect('towers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tower = Tower::find($id);

        $tower->delete();

        return redirect('towers');
    }
}
