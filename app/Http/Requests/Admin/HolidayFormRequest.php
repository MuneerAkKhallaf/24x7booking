<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class HolidayFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        
        $rules =  [

            'category_id' => [
                'required',
                'integer'
            ],
            
            'name' => [
                'required',
                'string',
                'max:200'
            ],
    
            'slug' => [
                'required',
                'string',
                'max:200'
            ],
    
            'description' => [
                'required'
                
            ],

            
            'days' => [
                'required',
                'integer',
                'min:1',
                'max:20'
                
            ],

            'itinerary' => [
                'required'
                
                
            ],
    
            'image' => [
                'nullable',
                'image'
            ],
    
            
            'meta_title' => [
                'required',
                'string'
               
            ],
    
              
            'meta_description' => [
                'required',
                'string'
                
            ],
    
            'meta_keyword' => [
                'required',
                'string'
                
            ],
    
           
            'status' => [
                'nullabe'
                
                
            ],
            
        ];
        return  $rules;
    
}
}
