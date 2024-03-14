<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class journey extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function vehicle():BelongsTo {
        return $this->belongsTo("vehicles", "vehicle", "id");
    }
}
