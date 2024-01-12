<?php

namespace App\Models;

use App\Models\Contrats;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Assurances extends Model
{
    use HasFactory;
    protected $fillable = [
        'assurance',
        'numeropolice',
        'Dateoperation',
        'heuredebut',
        'datedebut',
        'dureemois',
        'datefin',
        'prix',
        'contactass',
        'observation',
        'matricule',
        'modele',
        'assurancepic',
        'pjpic',
        'etat',

    ];
        // Relationship with Contrat model
        public function contrat()
        {
            return $this->hasMany(Contrats::class, 'assurance', 'assuranceid');
        }
    
}
