<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Techarticle;

class TecharticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $techarticles = Techarticle::latest()->get();

        return view('technews.index', compact('techarticles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('technews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $techarticle = new Techarticle;

        Techarticle::create([
            'title' => request('title'),
            'poster' => request('poster'),
            'body' => request('body'),
        ]);

        return redirect('technews');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $techarticle = Techarticle::find($id);

        return view('technews.show', compact('techarticle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $techarticle = Techarticle::find($id);

        return view('technews.show', compact('techarticle'));
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
        $techarticle = Techarticle::find($id);

        $techarticle->title = $request->title;
        $techarticle->body = $request->body;

        $techarticle->save();

        return redirect('technews');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $techarticle = Techarticle::find($id);

        $techarticle->delete();

        return redirect('technews');
    }
}
