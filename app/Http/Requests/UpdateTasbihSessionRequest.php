<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTasbihSessionRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //  'user_id' => "required|exists:users,id",
            //  'tasbih_id' => "required|exists:tasbihs,id",
            // 'duration_seconds' => "required|integer",
            //  'started_at' => "required|date",
            'ended_at' => "required|date",
        ];
    }
}
