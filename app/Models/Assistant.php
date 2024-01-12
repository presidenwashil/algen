<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assistant extends Model
{
    protected $fillable = ['code', 'name'];

    public function availabilities()
    {
        return $this->hasMany(AssistantAvailability::class);
    }
}
