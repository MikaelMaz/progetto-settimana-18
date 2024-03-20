<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Prenotazioni extends Model
{
    use HasFactory;

    public function corsi(): BelongsTo {
        return $this->belongsTo(Corsi::class);
    }

    
}
