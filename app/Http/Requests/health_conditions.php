<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class health_conditions extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'description'=>'required',            
            'systolic_pressure'=>'required',
            'diastolic_pressure'=>'required',
            'oxigen_saturation'=>'required',
            'temperature'=>'required',
            'fasting_glucose'=>'required',
            'postprandial_glucose'=>'required', 
            'medical_patients_id'=>'required',
        ];
    }
}
