<?php

namespace App\DomainDrivenDesign\App\Web\Task\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'category' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'informar o nome',
            'category.required' => 'Informar a categoria',
        ];
    }
}
