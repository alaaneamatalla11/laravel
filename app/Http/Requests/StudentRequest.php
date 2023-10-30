<?php

namespace App\Http\Requests;

use Illuminate\Support\Str;
use Illuminate\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    // the authorize method is responsible for determining 
    //if the currently authenticated user can perform the action represented by the request,,
    public function authorize(): bool
    {
        return true;
    }

    // the rules method returns the validation rules
    // that should apply to the request's data:
    public function rules(): array
    {
        return [
            'name' => 'required|max:20',
            'phone' => 'required|string|max:20',
            'city' => 'required|string|max:20',
            'address' => 'required|string|max:255',
        ];
    }
    // * Get the error messages for the defined validation rules.
    
    public function messages(): array
    {
        return [
            'name.max' => 'A name is required with max length 20',
            'phone.required' => 'A phone is required',
            'city.required' => 'A city is required',
            'address.required' => 'A address is required',

        ];
    }

    protected function passedValidation(): void
    {   dd($this->validated());
        $this->replace(['name' => 'Taylor']);
        $array = [
            '1',
            '2',
        ];
        []=5
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'name' => 'Taylor'
        ]);
        
        // dd($this);
    }
    // public function after(): array
    // {
    //     return [
    //         function (Validator $validator) {
    //             if ($this->somethingElseIsInvalid()) {
    //                 $validator->errors()->add(
    //                     'field',
    //                     'Something is wrong with this field!'
    //                 );
    //             }
    //         }
    //     ];
    // }
 }
