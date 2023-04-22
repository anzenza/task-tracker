<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserTask extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'due_date',
        'start_time',
        'end_time',
        'remarks',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function user(): HasOne 
    {

        return $this->hasOne(User::class);
    }

    public function task(): HasOne
    {

        return $this->hasOne(Task::class);
    }

    public function status(): HasOne 
    {
        
        return $this->hasOne(Status::class);
    }
}
