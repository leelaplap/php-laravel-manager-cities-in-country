<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationRequest extends FormRequest
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
        return [
            "city_name"=>"required",
            "city_desc"=>"required",
            "country_name"=>"required",
            "country_code"=>"required",
            "country_area"=>"required",
        ];
    }

    public function messages()
    {
        return [
            "city_name.required"=>"Không được phép để trống",
            "city_desc.required"=>"Không được phép để trống",
            "country_name.required"=>"Không được phép để trống",
            "country_code.required"=>"Không được phép để trống",
            "country_area.required"=>"Không được phép để trống",
        ];
    }
}
