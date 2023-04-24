<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class hsprequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * @return bool;
     */ 
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'hsp' => 'required|max:60', 
            'fecha_medicion' => 'required|date_format:Y-m-d\TH:i'
        ];
    }
}
