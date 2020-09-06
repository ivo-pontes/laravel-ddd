<?php

namespace Domain\Task\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Domain\Task\Enums\TaskStatus;

class Task extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'task', 'category','status'
    ];

    public function getStatusAttribute($value)
    {
      return TaskStatus::status($value);
    }
}
