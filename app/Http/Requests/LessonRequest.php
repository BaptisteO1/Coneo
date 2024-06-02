<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class LessonRequest extends FormRequest
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
            'slug' => ['required', 'string', 'between:3,255', 'unique:lessons'],
            'description' => ['required', 'string', 'between:3,255'],
            'content' => ['required', 'string', 'min:10'],
            'thumbnail' => ['required', 'image'],
            'order' => ['required', 'integer', 'min:1'],
            'course_id' => ['required', 'integer', 'exists:courses,id'],
            'tag_ids' => ['array', 'exists:tags,id'],
        ];
    }
}