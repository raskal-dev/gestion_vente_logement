<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logements extends Model
{
    use HasFactory;

    protected $fillable = [
        'num_logement',
        'prix_logement',
        'terrain_id'
    ];

    public function terrain() {
        return $this->belongsTo(Terrains::class);
    }
}
