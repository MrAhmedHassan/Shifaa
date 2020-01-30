<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestVlidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return  true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        
        if($this->method()=="post")
        {
            $gender='required';
            $a = 'required';
            $b = 'required';
            $c= 'required';
        }
        else
        {
            $gender='required';
            $a = 'required';
            $b= 'required';
            $c = 'required';
        }
        return [
            'gender' => $gender,
            'a' => $a,
            'b' => $b,
            'c' => $c,
        ];
   
    }
    
}

