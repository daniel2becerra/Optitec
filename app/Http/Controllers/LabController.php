<?php

namespace Optitec\Http\Controllers;

use Illuminate\Http\Request;
use Optitec\Http\Requests;
use Optitec\Http\Controllers\Controller;
use Optitec\Lab;
use Optitec\Marklen;
use Optitec\Typelen;
use Optitec\Materiallen;
use Optitec\FilterLen;
use Optitec\materialmarkprice;
use Response;
use Session;
use Redirect;
use DB;

class LabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $labs = Lab::paginate(15);
        return view('Lab.index', compact('labs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('Lab.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Lab::create($request->all());
        $lab_id = DB::table('labs')->max('id');
        $tipos = count($request->nametypelens);
        $filtros = count($request->filter);
        for ($i=0; $i < $tipos; $i++) 
        {
            $Tipo=
            [
                'name'=>$request->nametypelens[$i],
                'lab_id'=>$lab_id,
            ];
            Typelen::create($Tipo);
            $type_id = DB::table('typelens')->max('id');

            $marcas = $request->marca[$i];
            $materiales = $request->material[$i];
            $precios = $request->precio[$i];
            $arrayIDsMarcas = [];
            $arrayIDsMateriales = [];
            for ($j=0; $j < count($marcas); $j++)
            { 
                $marca = 
                [
                    'name'=>$marcas[$j],
                    'typelen_id'=>$type_id,
                ];
                Marklen::create($marca);
                $mark_id = DB::table('marklens')->max('id');
                array_push($arrayIDsMarcas, $mark_id);
            }

            for ($k=0; $k < count($materiales); $k++)
            { 
                $marca = 
                [
                    'name'=>$materiales[$k],
                    'typelen_id'=>$type_id,
                ];
                Materiallen::create($marca);
                $material_id = DB::table('materiallens')->max('id');
                array_push($arrayIDsMateriales, $material_id);
            }

            $contadorprice = 0;
            for ($l=0; $l < count($arrayIDsMateriales) ; $l++)
            { 
                for ($m=0; $m < count($arrayIDsMarcas); $m++)
                {
                    $price =
                    [
                        'marklen_id' => $arrayIDsMarcas[$m],
                        'materiallen_id' => $arrayIDsMateriales[$l],
                        'price' => $precios[$contadorprice],
                    ];                  
                    materialmarkprice::create($price);
                    $contadorprice++;
                }
            }        
        }

        for ($j=0; $j <$filtros ; $j++)
        { 
            $filter =
            [
                'name' => $request->filter[$j],
                'lab_id' => $lab_id,
            ];                  
            Filterlen::create($filter);
        }
        return Redirect::to('/Labs');
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
        $Lab = Lab::find($id);
        $datos = DB::select( DB::raw("SELECT typelens.id AS IDTYPE, typelens.name AS NAMETYPE,  marklens.id AS IDMARK, marklens.name AS NAMEMARK, materiallens.id AS IDMATERIAL, materiallens.name AS NAMEMATERIAL, materialmarkprices.id AS IDMATMARK, materialmarkprices.price AS PRICEMATMARK FROM labs
            JOIN typelens
            ON labs.id = typelens.lab_id
            JOIN marklens
            ON typelens.id = marklens.typelen_id
            JOIN materiallens
            ON typelens.id = materiallens.typelen_id
            JOIN materialmarkprices
            ON materiallens.id = materialmarkprices.materiallen_id and marklens.id = materialmarkprices.marklen_id
            WHERE labs.id = $id"));         
        $filtros = DB::table('filterlens')->where('lab_id','=',$id)->orderBy('id')->get();
        return view('Lab.edit', ['lab'=>$Lab], compact('datos', 'filtros'));
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
        $Lab = Lab::find($id);
        $Lab->fill($request->all());
        $Lab->save();
        Typelen::where('lab_id', $id)->delete();
        Filterlen::where('lab_id', $id)->delete();
        $tipos = count($request->nametypelens);
        $filtros = count($request->filter);
        for ($i=0; $i < $tipos; $i++) 
        {
            $Tipo=
            [
                'name'=>$request->nametypelens[$i],
                'lab_id'=>$id,
            ];
            Typelen::create($Tipo);
            $type_id = DB::table('typelens')->max('id');

            $marcas = $request->marca[$i];
            $materiales = $request->material[$i];
            $precios = $request->precio[$i];
            $arrayIDsMarcas = [];
            $arrayIDsMateriales = [];
            for ($j=0; $j < count($marcas); $j++)
            { 
                $marca = 
                [
                    'name'=>$marcas[$j],
                    'typelen_id'=>$type_id,
                ];
                Marklen::create($marca);
                $mark_id = DB::table('marklens')->max('id');
                array_push($arrayIDsMarcas, $mark_id);
            }

            for ($k=0; $k < count($materiales); $k++)
            { 
                $marca = 
                [
                    'name'=>$materiales[$k],
                    'typelen_id'=>$type_id,
                ];
                Materiallen::create($marca);
                $material_id = DB::table('materiallens')->max('id');
                array_push($arrayIDsMateriales, $material_id);
            }

            $contadorprice = 0;
            for ($l=0; $l < count($arrayIDsMateriales) ; $l++)
            { 
                for ($m=0; $m < count($arrayIDsMarcas); $m++)
                {
                    $price =
                    [
                        'marklen_id' => $arrayIDsMarcas[$m],
                        'materiallen_id' => $arrayIDsMateriales[$l],
                        'price' => $precios[$contadorprice],
                    ];                  
                    materialmarkprice::create($price);
                    $contadorprice++;
                }
            }        
        }

        for ($j=0; $j <$filtros ; $j++)
        { 
            $filter =
            [
                'name' => $request->filter[$j],
                'lab_id' => $id,
            ];                  
            Filterlen::create($filter);
        }
        Session::flash('message', 'laboratorio modificado correctamente');
        return Redirect::to('/Labs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        Lab::destroy($id);
        Session::flash('message', 'laboratorio eliminado correctamente');
        return Redirect::to('/Labs'); 
    }
}
