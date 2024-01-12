<?php

namespace App\Models;

use App\Models\Contrats;
use App\Models\Factures;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Charges extends Model
{
    use HasFactory;
    protected $fillable = [
        'Motif',
        'datechargee',
        'montant',
        'observation',
        'pj',

    ];
    
    // Relationship with Contrat model
    public function contrat()
    {
        return $this->belongsTo(Contrats::class, 'numerofacture', 'numerofacture');
    }

    // Relationship with Facture model
    public function facture()
    {
        return $this->belongsTo(Factures::class, 'numerofacture', 'numerofacture');
    }
}
