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
        
        if($this->method()=="post"&&$this->route()=="/tests/1")
        {
            
            $doing= 'required';
            $wedding='required' ;
            $friend= 'required';
            $car =   'required';
            $angry=  'required'; 
          
           /* $doing2= 'required';
            $wedding2= 'required';
            $friend2='required';
            $car2 =   'required';
            $angry2=  'required';  

            $doing3= 'required';
            $wedding3= 'required';
            $friend3= 'required';
            $car3 =   'required';
            $angry3=  'required'; 

            $doing4= 'required';
            $wedding4='required';
            $friend4= 'required';
            $car4 = 'required';
            $angry4= 'required'; 

            $doing5= 'required';
            $wedding5='required';
            $friend5= 'required';
            $car5 =  'required';
            $angry5='required'; 

            $doing6= 'required';
            $wedding6='required';
            $friend6='required';
            $car6 =  'required';
            $angry6= 'required'; */
        }
        else 
        {
           
         $doing= 'required';
            $wedding='required' ;
            $friend= 'required';
            $car =   'required';
            $angry=  'required'; 

           /* $doing2= 'required';
            $wedding2= 'required';
            $friend2='required';
            $car2 =   'required';
            $angry2=  'required';  

            $doing3= 'required';
            $wedding3= 'required';
            $friend3= 'required';
            $car3 =   'required';
            $angry3=  'required'; 

            $doing4= 'required';
            $wedding4='required';
            $friend4= 'required';
            $car4 = 'required';
            $angry4= 'required'; 

            $doing5= 'required';
            $wedding5='required';
            $friend5= 'required';
            $car5 =  'required';
            $angry5='required'; 

            $doing6= 'required';
            $wedding6='required';
            $friend6='required';
            $car6 =  'required';
            $angry6= 'required'; */
      }
        return [ 

            'doing'=> $doing ,
            'wedding'=> $wedding ,
            'friend'=> $friend,
            'car' =>   $car,
            'angry'=>  $angry, 

            
          /*  'doing2'=> $doing2 ,
            'wedding2'=> $wedding2 ,
            'friend2'=> $friend2,
            'car2' =>   $car2,
            'angry2'=>  $angry2,  

           
            'doing3'=> $doing3 ,
            'wedding3'=> $wedding3 ,
            'friend3'=> $friend3,
            'car3' =>   $car3,
            'angry3'=>  $angry3, 

            
            'doing4'=> $doing4 ,
            'wedding4'=> $wedding4 ,
            'friend4'=> $friend4,
            'car4' =>   $car4,
            'angry4'=>  $angry4, 

            
            'doing5'=> $doing5 ,
            'wedding5'=> $wedding5 ,
            'friend5'=> $friend5,
            'car5' =>   $car5,
            'angry5'=>  $angry5, 

            
            'doing6'=> $doing6 ,
            'wedding6'=> $wedding6 ,
            'friend6'=> $friend6,
            'car6' =>   $car6,
            'angry6'=>  $angry6, */
        ];
   
    }
    
}

