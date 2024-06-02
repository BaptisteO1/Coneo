<?php

namespace App\Models;

use App\Models\Theme;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Course extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $with = [
        'theme',
        'tags',
        'firstLesson',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function scopeFilters(Builder $query, array $filters): void
    {
        if (isset($filters['search'])) {
            $query->where(fn (Builder $query) => $query
                ->where('title', 'LIKE', '%' . $filters['search'] . '%')
                ->orWhere('description', 'LIKE', '%' . $filters['search'] . '%')
            );
        }

        if (isset($filters['theme'])) {
            $query->where(
                'theme_id', $filters['theme']->id ?? $filters['theme']
            );
        }

        if (isset($filters['tag'])) {
            $query->whereHas('tags', function (Builder $query) use ($filters) {
                $query->where('tags.id', $filters['tag']->id ?? $filters['tag']);
            });
        }
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
