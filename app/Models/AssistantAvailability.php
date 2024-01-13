<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssistantAvailability extends Model
{
    protected $fillable = ['assistant_id', 'day', 'session', 'is_available'];

    public function assistant()
    {
        return $this->belongsTo(Assistant::class);
    }
}
