<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typeventes extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle_typevente'
    ];
}
