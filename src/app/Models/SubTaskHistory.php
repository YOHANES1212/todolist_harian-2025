<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubTaskHistory extends Model
{
    protected $fillable = [
        'user_id',
        'sub_task_id',
        'status',
        'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subTask()
    {
        return $this->belongsTo(SubTask::class);
    }
}
