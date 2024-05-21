<?php

namespace App\Models;

use App\Models\Theme;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Course extends Model
{
    use HasFactory;

    protected $with = [
        'theme',
        'tags',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

     /**
     * Get the first lesson of the course.
     */
    public function firstLesson()
    {
        return $this->hasOne(Lesson::class)->ofMany('order', 'min');
    }

    public function theme(): BelongsTo
    {
        return $this->belongsTo(Theme::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
