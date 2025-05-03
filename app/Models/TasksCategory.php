<?php

namespace App\Models;

use Database\Factories\TasksCategoryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TasksCategory extends Model
{
    /** @use HasFactory<TasksCategoryFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
    ];

    /**
     * @return HasMany
     */
    public function tasks(): hasMany
    {
        return $this->hasMany(Task::class);
   }
}
