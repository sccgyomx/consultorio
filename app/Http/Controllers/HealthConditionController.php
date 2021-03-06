<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\health_condition;
use Illuminate\Http\Request;

class HealthConditionController extends Controller
{


    public function new(Request $request)
    {
        //
        
        $health_condition=health_condition::create($request->post());
        return response()->json(['health_condition'=> $health_condition]);
    }

    public function get($id)
    {
        //
        $health_conditions = DB::table('health_conditions')->where(['medical_patients_id'=>$id])->get();
        return response()->json($health_conditions);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\health_condition  $health_condition
     * @return \Illuminate\Http\Response
     */
    public function show(health_condition $health_condition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\health_condition  $health_condition
     * @return \Illuminate\Http\Response
     */
    public function edit(health_condition $health_condition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\health_condition  $health_condition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, health_condition $health_condition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\health_condition  $health_condition
     * @return \Illuminate\Http\Response
     */
    public function destroy(health_condition $health_condition)
    {
        //
    }
}
