<?php

Namespace App\Validation;

class ForRoom
{
   /**
    * Validation rules defination.
    *
    * @return array
    */
    public function rules()
    {
        return [
            'image'  => 'required',
            'name'  => 'required',
            'beds'  => 'required',
            'baths' => 'required',
            'price' => 'required',
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
