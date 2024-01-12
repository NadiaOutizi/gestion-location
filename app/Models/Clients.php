<?php

namespace App\Models;

use App\Models\Contrats;
use App\Models\Reservations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Clients extends Model
{
    use HasFactory;
    protected $fillable = [
        'cin',
        'civilite',
        'nationalite',
        'nom',
        'prenom',
        'permi',
        'passeport',
        'adresse',
        'ville',
        'codepostal',
        'tele',
        'telephone',
        'email',
        'remarque',
        'datecin',
        'datepermi',
        'datepassport',
        'rectocin',
        'versocin',
        'rectopermi',
        'versopermi',
        'rectopassport',
        'versopassport',
        'listenoir',
        'delivrecin',
        'delivrepermi',
        'delivrepassporte',
        'doit',
        'ice',
        'typeclient',
        'numerodoss',
    ];
       // Relationship with Contrat model
       public function contrats()
       {
           return $this->hasMany(Contrats::class, 'client', 'cin');
       }
   
       // Relationship with Reservation model
       public function reservations()
       {
           return $this->hasMany(Reservations::class, 'client', 'cin');
       }
}
