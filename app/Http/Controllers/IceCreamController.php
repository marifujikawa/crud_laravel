<?php

namespace App\Http\Controllers;

use App\Models\IceCream;
use Illuminate\Http\Request;
use App\Http\Requests\IceCreamRequest;

class IceCreamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $icecreams = IceCream::all();
        return view('icecream.index', ['icecreams' => $icecreams]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('icecream.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IceCreamRequest $request)
    {
        $dados = $request->all();
        IceCream::create($dados);
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IceCream  $iceCream
     * @return \Illuminate\Http\Response
     */
    public function show(IceCream $icecream)
    {
        return view('icecream.show', ['icecream' => $icecream]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IceCream  $iceCream
     * @return \Illuminate\Http\Response
     */
    public function edit(IceCream $icecream)
    {
      return view('icecream.edit', ['icecream' => $icecream]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\IceCream  $iceCream
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IceCream $icecream)
    {
       $dados= $request->all();
       $icecream->update($dados);
       return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IceCream  $iceCream
     * @return \Illuminate\Http\Response
     */
    public function destroy(IceCream $icecream)
    {
        $icecream->delete();
        return $this->index();
    }
}
