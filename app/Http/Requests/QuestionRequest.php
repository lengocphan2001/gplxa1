<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'required', 'min:10', 'unique:questions,name']
        ];
    }

    public function messages()
    {
        return [
            'name.string' => 'Tên câu hỏi không hợp lệ',
            'name.required' => 'Tên câu hỏi không được để trống',
            'name.min' => 'Tên câu hỏi tối thiếu 10 ký tự',
            'name.unique' => 'Tên câu hỏi đã tồn tại'
        ];
    }
}
