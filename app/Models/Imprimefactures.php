<?php

namespace App\Models;

use App\Models\Contrats;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Imprimefactures extends Model
{
    use HasFactory;
    protected $fillable = [
        'vehicule',
        'matricule',
        'jours',
        'duu',
        'au',
        'prix',
        'total',
    ];

    // Relationship with Contrat model
    public function contrat()
    {
        return $this->belongsTo(Contrats::class, 'Id', 'numerofacture');
    }
}
