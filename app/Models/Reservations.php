<?php

namespace App\Models;

use App\Models\Clients;
use App\Models\Contrats;
use App\Models\Nouvellevoitures;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservations extends Model
{
    use HasFactory;

    protected $fillable = [
        'numreservation',
        'cin',
        'client',
        'valcin',
        'permi',
        'valpermi',
        'datereservation',
        'datedebut',
        'etat',
        'jours',
        'datefin',
        'matricuule',
        'voiture',
        'prixjourne',
        'total',
        'avance',
        'note',
        'DCIN',
        'dpermi',
        'dpasspor',
        'adresse',
        'telephone',
        'passport',
        'valpass',
    ];
        // Relationship with Client model
        public function client()
        {
            return $this->belongsTo(Clients::class, 'client', 'cin');
        }
    
        // Relationship with Contrat model
        public function contrat()
        {
            return $this->belongsTo(Contrats::class, 'contrat', 'numerodoss');
        }
    
        // Relationship with Nouvellevoiture model
        public function nouvellevoiture()
        {
            return $this->belongsTo(Nouvellevoitures::class, 'matricule', 'matricule');
 
        }
        protected static function booted()
        {
            static::creating(function ($reservation) {
                $reservation->numreservation = static::generateReservationNumber();
            });
        }
    
        protected static function generateReservationNumber()
        {
            $latestReservation = static::latest()->first();
    
            if ($latestReservation) {
                // Extract the current numerical part and increment it
                $currentNumber = intval($latestReservation->numreservation);
                $nextNumber = $currentNumber + 1;
            } else {
                // If no reservations, start with 1
                $nextNumber = 1;
            }
    
            // Format the number with leading zeros
            return sprintf('%06d', $nextNumber);
        }
}
