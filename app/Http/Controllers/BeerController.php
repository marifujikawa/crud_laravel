<?php

namespace App\Http\Controllers;

use App\Models\Beer;
use Illuminate\Http\Request;
use App\Http\Requests\BeerRequest;

class BeerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beers=Beer::all();
        return view('beer.index', ['beers'=>$beers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BeerRequest $request)
    {
        $dados = $request->all();
        Beer::create($dados);
        return redirect()->route('beer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Beer  $beer
     * @return \Illuminate\Http\Response
     */
    public function show(Beer $beer)
    {
        return view('beer.show', ['beer' => $beer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Beer  $beer
     * @return \Illuminate\Http\Response
     */
    public function edit(Beer $beer)
    {
        return view('beer.edit', ['beer' => $beer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Beer  $beer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beer $beer)
    {
        $dados = $request->all();
        $beer->update($dados);
        return redirect()->route('beer.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Beer  $beer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beer $beer)
    {
        $beer->delete();
        return redirect()->route('beer.index');
    }
}
