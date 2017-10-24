<?php

namespace Optitec\Http\Controllers;

use Illuminate\Http\Request;

use Optitec\Http\Requests;
use Optitec\Http\Controllers\Controller;
use Optitec\Appointment;
use Session;
use Redirect;
use DB;
use Carbon\Carbon;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function calendar()
    {
        return view("Appointment.index");
    }

    public function index()
    {
        $data = Appointment::get(['id', 'title', 'phone', 'start', 'end', 'color']);
        return Response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $appointment = new Appointment();
        $appointment->title = $request->title;
        $appointment->phone = $request->phone;
        $inicio = $request->date_start . ' ' . $request->time_start;
        $appointment->start = $inicio;
        $fin = Carbon::parse($inicio)->addMinutes(30);
        $appointment->end = $fin;
        $appointment->color = $request->color;
        $appointment->save();

        return redirect('/Calendar');
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
        //
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
        $inicio = $request->date_start . ' ' . $request->time_start;
        $fin = Carbon::parse($inicio)->addMinutes(30);

        DB::table('appointments')
            ->where('id', $id)
            ->update(['title' => $request->title, 'phone' => $request->phone, 'start' => $inicio, 'end' => $fin, 'color' => $request->color]);
        Session::flash('message', 'cita modificada correctamente');
        return Redirect::to('/Calendar'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Appointment::find($id);

        if($event == null)
            return Response()->json([
                'message'   =>  'error delete.'
            ]);

        $event->delete();

        return Response()->json([
            'message'   =>  'success delete.'
        ]);

    }
}
