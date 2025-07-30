<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubTask extends Model
{
    protected $fillable = [
        'task_id',
        'title',
        'description',
        'status',
        'due_date',
    ];

    public function task(): BelongsTo
    {
        return $this->belongsTo(Task::class);
    }

    public function histories(): HasMany
    {
        return $this->hasMany(SubTaskHistory::class);
    }
}

