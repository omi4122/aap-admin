<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskStatus extends Model
{
    use HasFactory;
    protected $table = 'task_status';
    protected $fillable = [
        'task_title',
        'assign_to',
        'task_description',
        'volunteer',
        'address',
        'status',
        'remarks'
    ];
}
