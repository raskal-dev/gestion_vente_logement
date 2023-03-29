<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terrains extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_terrain',
        'superficie_terrain'
    ];

    public function cite() {
        return $this->belongsTo(Cites::class);
    }
}
