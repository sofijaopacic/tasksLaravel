<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'due_date',
        'finished',
        'task_type_id',
        'employee_id'
    ];

    protected $with = ['employee', 'task_type'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function task_type()
    {
        return $this->belongsTo(TaskType::class);
    }
}
