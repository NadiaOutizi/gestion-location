<?php

namespace App\Models;

use App\Models\Clients;
use App\Models\Reservations;
use App\Models\Nouvellevoitures;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contrats extends Model
{
    use HasFactory;
    protected $fillable = [
        'numcontrat',
        'datecontrat',
        'client',
        'cin',
        'valcin',
        'permi',
        'valpermi',
        'du',
        'au',
        'jours',
        'lieulivr',
        'lieurecu',
        'matricule',
        'vehicule',
        'prix',
        'kmdepart',
        'carbu',
        'typecarbu',
        'typepayment',
        'garentie',
        'montant',
        'etat',
        'cliente',
        'cinvale',
        'permiee',
        'permieeval',
        'cincondu',
        'equipement',
        'DCIN',
        'dpermi',
        'dpasspor',
        'adresse',
        'telephone',
        'passport',
        'valpass',
        'DCINe',
        'dpermie',
        'dpasspore',
        'adressee',
        'telephonee',
        'passporte',
        'valpasse',
        'heure',
        'min',
        'sousloa',
        'matriculesous',
        'Souslocaetat',
        'datehm',
        'av',
    ];
        // Relationship with Client model
        public function client()
        {
            return $this->belongsTo(Clients::class, 'client', 'cin');
        }
    
        // Relationship with Nouvellevoiture model
        public function nouvellevoiture()
        {
            return $this->belongsTo(Nouvellevoitures::class, 'matricule', 'matricule');
        }
    
        // Relationship with Reservation model
        public function reservation()
        {
            return $this->hasOne(Reservations::class, 'contrat', 'numerodoss');
        }
        protected static function boot()
        {
            parent::boot();
    
            // Auto-generate contract number before saving
            static::creating(function ($contrat) {
                $latestContrat = static::latest()->first();
    
                if ($latestContrat) {
                    $contrat->numcontrat = sprintf('%05d', $latestContrat->id + 1);
                } else {
                    // If it's the first contract, start with 00001
                    $contrat->numcontrat = '00001';
                }
            });
        }
}
