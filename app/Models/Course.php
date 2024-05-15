<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

     /**
     * Get the first lesson of the course.
     */
    public function firstLesson() {
        return $this->hasOne(Lesson::class)->ofMany('order', 'min');
    }
}
