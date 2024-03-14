<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class vehicle extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function journeys():HasMany {
        return $this->hasMany("journeys", "vehicle", "id");
    }
}
