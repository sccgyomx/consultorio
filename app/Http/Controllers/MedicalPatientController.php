<?php

namespace App\Http\Controllers;

use App\Models\medical_patient;
use Illuminate\Http\Request;

class MedicalPatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $medical_patients= medical_patient::all();
        return response()->json($medical_patients);
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
        $medical_patient=medical_patient::create($request->post());
        return response()->json(['medical_patient'=> $medical_patient]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\medical_patient  $medical_patient
     * @return \Illuminate\Http\Response
     */
    public function show(medical_patient $medical_patient)
    {
        //
        return response()->json($medical_patient);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\medical_patient  $medical_patient
     * @return \Illuminate\Http\Response
     */
    public function edit(medical_patient $medical_patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\medical_patient  $medical_patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, medical_patient $medical_patient)
    {
        //
        $medical_patient->fill($request->post())->save();
        return response()->json(['medical_patient'=> $medical_patient]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\medical_patient  $medical_patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(medical_patient $medical_patient)
    {
        //
        $medical_patient->delete();
        return response()->json();
    }
}
