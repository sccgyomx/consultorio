<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class medical_patients extends FormRequest
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
            'name'=>'required',
            'age'=>'required',
            'gender'=>'required',
            'date_of_birth'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'weight'=>'required',
            'height'=>'required',
        ];
    }
}
