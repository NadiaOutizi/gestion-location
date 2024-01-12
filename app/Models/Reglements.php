<?php

namespace App\Models;

use App\Models\Contrats;
use App\Models\Factures;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reglements extends Model
{
    use HasFactory;

    protected $fillable = [
        'numeroreglemnt',
        'dateregelement',
        'Regler',
        'Regelement',
        'client',
        'montantrest',
        'typepaiement',
        'Reglee',
        'pj',
        
  
    ];
     // Relationship with Contrat model
     public function contrat()
     {
         return $this->belongsTo(Contrats::class, 'numeroreglemnt', 'numeroreglemnt');
     }
 
     // Relationship with Facture model
     public function facture()
     {
         return $this->belongsTo(Factures::class, 'numeroreglemnt', 'numeroreglemnt');
     }
     protected static function booted()
     {
         static::creating(function ($reglement) {
             $reglement->numeroreglemnt = static::generateReglementNumber();
         });
     }
 
     protected static function generateReglementNumber()
     {
         $latestReglement = static::latest()->first();
 
         if ($latestReglement) {
             // Extract the current numerical part and increment it
             $currentNumber = intval($latestReglement->numeroreglemnt);
             $nextNumber = $currentNumber + 1;
         } else {
             // If no reglements, start with 1
             $nextNumber = 1;
         }
 
         // Format the number with leading zeros
         return sprintf('%06d', $nextNumber);
     }

}
