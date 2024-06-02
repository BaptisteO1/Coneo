<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class CourseRequest extends FormRequest
{
    protected function prepareForValidation(): void
    {
        $this->merge([
            'slug' => Str::slug($this->slug ?? $this->title),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'between:3,255'],
            'slug' => ['required', 'string', 'between:3,255', 'unique:courses'],
            'description' => ['required', 'string', 'between:3,255'],
            'thumbnail' => ['required', 'image'],
            'theme_id' => ['required', 'integer', 'exists:themes,id'],
            'tag_ids' => ['array', 'exists:tags,id'],
        ];
    }
}