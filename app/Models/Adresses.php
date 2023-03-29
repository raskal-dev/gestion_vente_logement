<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adresses extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle_adresse',
        'codepostal_id'
    ];

    public function codepostal() {
        return $this->belongsTo(Codepostals::class);
    }
}
