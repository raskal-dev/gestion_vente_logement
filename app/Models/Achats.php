<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achats extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_cli',
        'prenom_cli',
        'cin',
        'tel_cli',
        'email_cli',
        'typevente_id',
        'logement_id'
    ];

    public function typevente() {
        return $this->belongsTo(Typeventes::class);
    }

    public function logement() {
        return $this->belongsTo(Logements::class);
    }
}
