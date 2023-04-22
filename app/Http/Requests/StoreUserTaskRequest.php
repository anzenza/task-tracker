<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserTaskRequest extends FormRequest
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
            'due_date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'remarks' => 'required|string|max:100',
            'user_id' => 'required|integer|numeric',
            'task_id' => 'required|integer|numeric',
            'status_id' => 'required|integer|numeric'
        ];
    }
}
