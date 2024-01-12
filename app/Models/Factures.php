<?php

namespace App\Models;

use App\Models\Contrats;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Factures extends Model
{
    use HasFactory;

    protected $fillable = [
        'numerofacture',
        'datefacture',
        'client',
        'lieufact',
        'doit',
        'ice',
        'nombrecontrat',
        'montantht',
        'tva',
        'montantttc',
    ];
        // Relationship with Contrat model
        public function contrat()
        {
            return $this->belongsTo(Contrats::class, 'numerofacture', 'numerofacture');
        }
    
        protected static function booted()
        {
            static::creating(function ($facture) {
                $facture->numerofacture = static::generateFactureNumber();
            });
        }
    
        protected static function generateFactureNumber()
        {
            $year = now()->year;
    
            $latestFacture = static::whereYear('created_at', $year)->latest()->first();
    
            if ($latestFacture) {
                // Extract the current numerical part and increment it
                $currentNumber = intval(explode('/', $latestFacture->numerofacture)[0]);
                $nextNumber = $currentNumber + 1;
            } else {
                // If no factures for the current year, start with 1
                $nextNumber = 1;
            }
    
            // Format the number with leading zeros and concatenate with the year
            return sprintf('%05d', $nextNumber) . '/' . substr($year, -2);
        }
}
