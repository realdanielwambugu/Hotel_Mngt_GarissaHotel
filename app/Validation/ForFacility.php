<?php

Namespace App\Validation;

class ForFacility
{
   /**
    * Validation rules defination.
    *
    * @return array
    */
    public function rules()
    {
        return [
            'image'    => 'required',
            'name'     => 'required',
            'open'     => 'required',
            'close'    => 'required',
            'capacity' => 'required',
            'price'    => 'required',
            'description'    => 'required', 
        ];
    }

   /**
    * Error messages mappings.
    *
    * @param string|null $rule
    * @return array
    */
    public function messages($rule = null)
    {
        $messages = [

        ];

        return  $messages[$rule] ?? $messages;
    }



}
