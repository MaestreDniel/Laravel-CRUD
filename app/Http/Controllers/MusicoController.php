<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditMusicoRequest;
use App\Http\Requests\SaveMusicoRequest;
use App\Models\Musico;
use Illuminate\Http\Request;


class MusicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('micrud.musicos.index', [
            'musicos' => Musico::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('micrud.musicos.create', [
            'musico' => new Musico
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveMusicoRequest $request)
    {
        $musico = New Musico($request->validated());

        $musico->imagen = $request->file('imagen')->store('images');

        $musico->save();

        return redirect()->route('musicos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Musico $musico)
    {
        return view('micrud.musicos.show', [
            'musico' => $musico
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Musico $musico)
    {
        return view('micrud.musicos.edit', [
            'musico' => $musico
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Musico $musico, EditMusicoRequest $request)
    {
        $musico->update($request->validated());

        return redirect()->route('musicos.show', $musico);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Musico $musico)
    {
        $musico->delete();

        return redirect()->route('musicos.index', $musico);
    }
}