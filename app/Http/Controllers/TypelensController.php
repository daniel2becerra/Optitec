<?php

namespace Optitec\Http\Controllers;

use Illuminate\Http\Request;
use Optitec\Http\Requests;
use Optitec\Http\Controllers\Controller;
use Optitec\Lab;
use Optitec\Typelens;
use Optitec\Materiallens;
use Session;
use Redirect;
use DB;

class TypelensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        $typelens = Typelens::paginate(15);
        return view('Typelens.index', compact('typelens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $labs = Lab::lists('name','id');
        return view('Typelens.create', compact('labs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Tlens=
            [
                'lab_id'=>$request->lab_id,
                'name'=>$request->name,
            ];
        Typelens::create($Tlens);
        $typelens_id = DB::table('typelens')->max('id');
        for ($i=0; $i < count($request->namematerialLens); $i++) 
        {
            $Mlens=
                [
                    'typelens_id'=>$typelens_id,
                    'name'=>$request->namematerialLens[$i],
                ];
            Materiallens::create($Mlens);
        }
        
        Session::flash('message', 'producto creado correctamente');
        return Redirect('/Typelens');
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
        $Typelens = Typelens::find($id);
        $materiallens = Materiallens::where('typelens_id', $id)->orderby('id', 'asc')->get();
        $labs = Lab::lists('name','id');
        return view('Typelens.edit', ['typelens'=>$Typelens], compact('labs', 'materiallens'));
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
        Materiallens::where('typelens_id', $id)->delete();
        for ($i=0; $i < count($request->namematerialLens); $i++) 
        {
            $Mlens=
                [
                    'typelens_id' =>$id,
                    'name' =>$request->namematerialLens[$i],
                ];
            Materiallens::create($Mlens);
        }
        $Typelens = Typelens::find($id);
        $Typelens->fill($request->all());
        $Typelens->save();
        Session::flash('message', 'producto modificado correctamente');
        return Redirect::to('/Typelens'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Materiallens::where('typelens_id', $id)->delete();
        Typelens::destroy($id);
        Session::flash('message', 'producto eliminado correctamente');
        return Redirect::to('/Typelens'); 
    }
}
