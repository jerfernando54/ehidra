<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programdor extends Model
{
    use HasFactory;

    protected $table = "programdors";

    public function city(): BelongsTo {
        return $this->belongsTo(City::class); 
    }
}
