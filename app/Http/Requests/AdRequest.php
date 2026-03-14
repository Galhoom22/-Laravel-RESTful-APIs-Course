<?php

namespace App\Http\Requests;

use App\Helpers\ApiResponse;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class AdRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function failedValidation(ValidationValidator $validator)
    {
        if($this->is('api/*')){
            $response = ApiResponse::sendResponse(422, 'Validation Errors', $validator->errors());
            throw new ValidationException($validator, $response);
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required',
            'phone' => 'required',
            'text' => 'required',
            'domain_id' => 'required|exists:domains,id',
        ];
    }

    public function attributes(): array
    {
        return [
            'title' => 'Title',
            'phone' => 'Phone',
            'text' => 'Description',
            'domain_id' => 'Domain',
        ];
    }
}
