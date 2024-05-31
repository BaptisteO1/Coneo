<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'role',
    ];

    /**
     * Relation with User.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
