<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Powersupply;

class PowersupplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $powersupplies = Powersupply::all();

        return view('powersupplies.index', compact('powersupplies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('powersupplies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $powersupply = New Powersupply;

        $powersupply->name = $request->name;
        $powersupply->productcode = $request->productcode;
        $powersupply->brand = $request->brand;
        $powersupply->wattage = $request->wattage;

        $powersupply->save();

        Powersupply::create($request->all());

        return redirect('powersupplies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $powersupply = Powersupply::find($id);

        return view('powersupplies.show', compact('powersupply'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $powersupply = Powersupply::find($id);

        return view('powersupplies.edit', compact('cat'));
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
        $powersupply = Powersupply::find($id);

        $powersupply->name = $request->name;
        $powersupply->productcode = $request->productcode;
        $powersupply->brand = $request->brand;
        $powersupply->wattage = $request->wattage;

        $powersupply->save();

        return redirect('powersupplies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $powersupply = Powersupply::find($id);

        $powersupply->delete();

        return redirect('powersupplies');
    }
}
