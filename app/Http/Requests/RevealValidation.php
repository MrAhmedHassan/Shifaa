<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RevealValidation extends FormRequest
{


    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        
        if($this->method()=="put")
        {
            $date='required';
            $from = 'required';
            $to = 'required';
            $limit = 'required';
        }
        else
        {
            $date='required';
            $from = 'required';
            $to = 'required';
            $limit = 'required';
        }
        return [
            'date' => $date,
            'from' => $from,
            'to' => $to,
            'limit' => $limit,
        ];
   
    }
}
