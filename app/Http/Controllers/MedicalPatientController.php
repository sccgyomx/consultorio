<?php

namespace App\Http\Controllers;

use App\Models\medical_patient;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MedicalPatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        //
        $medical_patients= medical_patient::all();
        return response()->json($medical_patients);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function new(Request $request)
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
    public function get($id)
    {
        //

        $medical_patient = medical_patient::whereId($id)->first();
        return response()->json($medical_patient);
    }

    public function search($id){
        $medical_patient=medical_patient::where('paciente_id', 'LIKE', $id)->get()->first();
        return response()->json($medical_patient);
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\medical_patient  $medical_patient
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(medical_patient $medical_patient)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\medical_patient  $medical_patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        DB::beginTransaction();

        $medical_patient=medical_patient::find($request->id);
        $medical_patient->name = $request ->name;
        $medical_patient->age = $request ->age;
        $medical_patient->gender = $request ->gender;
        $medical_patient->date_of_birth = $request ->date_of_birth;
        $medical_patient->address = $request ->address;
        $medical_patient->phone = $request ->phone;
        $medical_patient->weight = $request ->weight;
        $medical_patient->height = $request ->height;
        $medical_patient->paciente_id = $request -> paciente_id;
        $medical_patient->save();

        DB::commit();

        return response()->json($request);
    }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\medical_patient  $medical_patient
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(medical_patient $medical_patient)
    // {
    //     //
    //     $medical_patient->delete();
    //     return response()->json();
    // }
}
