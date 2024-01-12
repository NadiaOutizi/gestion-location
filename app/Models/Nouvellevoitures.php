<?php

namespace App\Models;

use App\Models\Contrats;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Nouvellevoitures extends Model
{
    use HasFactory;
    protected $fillable = [
        'numerochassis',
        'matricule',
        'marque',
        'module',
        'datamisecirc',
        'nombredplace',
        'kilometrage',
        'prixlocation',
        'colorvehicule',
        'typedecarburant',
        'carburant',
        'etatvoiture',
        'accessoir',
        'observation',
        'Dateautorisation',
        'Dateautorisationv',
        'DateCarteGrise',
        'DateCarteGrisev',
        'imagevoiture',
        'imageatourisatio',
        'imagerectocviste',
        'imageversovisite',
  
    ];
      // Relationship with Contrat model
      public function contrats()
      {
          return $this->hasMany(Contrats::class, 'matricule', 'matricule');
      }
}
