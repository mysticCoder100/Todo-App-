<?php

namespace App\Models;

use App\Enums\TaskPriorities;
use Database\Factories\TaskFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /** @use HasFactory<TaskFactory> */
    use HasFactory;

    protected $fillable = [
        'tasks_category_id',
        'name',
        'description',
        'due_date',
        'priority',
        'is_completed'
    ];

    protected array $cast = [
        "priority" => TaskPriorities::class,
    ];
}
