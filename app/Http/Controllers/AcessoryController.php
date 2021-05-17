<?php

namespace App\Http\Controllers;

use App\Models\Acessory;
use Illuminate\Http\Request;

class AcessoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acessories = Acessory::all();

        return view('acessory.index', ['acessories' => $acessories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('acessory.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->all();
        $id  = Acessory::create($dados);
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Acessory  $acessory
     * @return \Illuminate\Http\Response
     */
    public function show(Acessory $acessory)
    {
        return view('acessory.show', ['acessory' => $acessory]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Acessory  $acessory
     * @return \Illuminate\Http\Response
     */
    public function edit(Acessory $acessory)
    {
        return view('acessory.edit', ['acessory' => $acessory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Acessory  $acessory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Acessory $acessory)
    {
        $dados = $request->all();
        $acessory->update($dados);

        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Acessory  $acessory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acessory $acessory)
    {
        $acessory->delete();

        return $this->index();
    }
}
