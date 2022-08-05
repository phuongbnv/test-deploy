<?php

namespace App\Http\Requests\Contacts;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Symfony\Component\HttpFoundation\Response;

class ContactInputRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'inquiry_type_id' => 'required|numeric',
            'title' => 'required|string',
            'content' => 'required|string'
        ];
    }

    protected function failedValidation(Validator $validator): void
    {
        $errors = [];
        foreach ($validator->errors()->toArray() as $key => $error) {
            $errors['code'] = $key;
            $errors['message'] = $error[0];
            break;
        }
        throw new HttpResponseException(response()->json([
            'status' => Response::HTTP_BAD_REQUEST,
            'error' => $errors,
        ]));
    }
}
