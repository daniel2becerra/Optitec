<?php

namespace Optitec\Http\Controllers;

use Illuminate\Http\Request;
use Optitec\Http\Requests;
use Optitec\Http\Controllers\Controller;
use Optitec\Lense;
use Optitec\Lab;
use Redirect;
use DB;

class LenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lenses = Lense::paginate(15);
        return view('Lens.index', compact('lenses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $labs = Lab::lists('name','id');
         return view('Lens.create', compact('labs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Lense::create($request->all());
        Session::flash('message', 'lente creado correctamente');
        return Redirect('/Products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Lense = Product::find($id);
        return view('Lens.edit', ['lense'=>$Lense]);
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
        $lense = Product::find($id);
        $lense->fill($request->all());
        $lense->save();
        Session::flash('message', 'lente modificado correctamente');
        return Redirect::to('/Lenses'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        Session::flash('message', 'lente eliminado correctamente');
        return Redirect::to('/Lenses'); 
    }
}
