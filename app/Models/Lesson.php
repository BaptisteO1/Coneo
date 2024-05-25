<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lesson extends Model
{
    use HasFactory;

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function nextLesson()
    {
        return self::where('course_id', $this->course_id)
                    ->where('order', '>', $this->order)
                    ->orderBy('order', 'asc')
                    ->first();
    }

    public function previousLesson()
    {
        return self::where('course_id', $this->course_id)
                    ->where('order', '<', $this->order)
                    ->orderBy('order', 'desc')
                    ->first();
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class)->latest();
    }
}
