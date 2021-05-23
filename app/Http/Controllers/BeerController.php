<?php

namespace App\Http\Controllers;

use App\Models\Beer;
use Illuminate\Http\Request;
use App\Http\Requests\BeerRequest;
use Session;

class BeerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            //code...
            $beers=Beer::all();
            return view('beer.index', ['beers'=>$beers]);
        } catch (\Throwable $th) {
            Session::flash('error', $th->getMessage());
            return view('beer.index', ['beers' => []]);
        }
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
        Session::flash('success', "cerveja adicionada com sucesso");
        Session::flash('error', "Falha em adicionar a cerveja");
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
        Session::flash('success', "cerveja atualizada com sucesso");
        Session::flash('error', "Falha em atualizar a cerveja");
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
        Session::flash('success', "cerveja excluída com sucesso");
        Session::flash('error', "Falha em excluir a cerveja");
        return redirect()->route('beer.index');
    }
}
