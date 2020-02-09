<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactValidation extends FormRequest
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
            $name='required';
            $email = 'required';
            $message = 'required';

        }
        else
        {
            $name='required';
            $email = 'required';
            $message = 'required';
        }
        return [
            'name' =>  $name,
            'email' =>  $email,
            'message' => $message,
        ];

    }
}
