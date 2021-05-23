<?php

namespace App\Http\Controllers;

use App\Models\Wine;
use Illuminate\Http\Request;
use App\Http\Requests\WineRequest;
use Session;

class WineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wines = Wine::all();
        return view('wine.index', ['wines' => $wines]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wine.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WineRequest $request)
    {
        $dados = $request->all();
        Wine::create($dados);
        Session::flash('success', "Vinho atualizado com sucesso");
        Session::flash('error', "Falha em atualizar o vinho");
        return redirect()->route('wine.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wine  $wine
     * @return \Illuminate\Http\Response
     */
    public function show(Wine $wine)
    {
        return view('wine.show', ['wine' => $wine]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wine  $wine
     * @return \Illuminate\Http\Response
     */
    public function edit(Wine $wine)
    {
        return view('wine.edit', ['wine' => $wine]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wine  $wine
     * @return \Illuminate\Http\Response
     */
    public function update(WineRequest $request, Wine $wine)
    {
        $dados = $request->all();
        $wine->update($dados);
        Session::flash('success', "Vinho atualizado com sucesso");
        Session::flash('error', "Falha em atualizar o vinho");
        return redirect()->route('wine.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wine  $wine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wine $wine)
    {
        $wine->delete();
        return redirect()->route('wine.index');
    }
}
