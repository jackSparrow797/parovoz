<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedBackRequest extends FormRequest
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
            'name' => 'required',
            'text' => 'required',
            'phone' => 'required',
            'g-recaptcha-response' => 'required|recaptchav3:register,0.5'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Имя обязательное поле',
            'text.required'  => 'Комментарий обязательное поле',
            'phone.required'  => 'Телефон обязательное поле',
        ];
    }
}
