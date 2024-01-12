<?php

namespace App\Models;

use App\Models\Clients;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Infractions extends Model
{
    use HasFactory;
    protected $fillable = [
        'numeroinfra',
        'matricule',
        'vehicule',
        'dateinfraction',
        'heure',
        'min',
        'faita',
        'faitele',
        'client',
        'numerodossier',
        'cin',
        'permi',
        'passport',
        'adresse',
        'telephone',
        'gsm2',
        'pj',
    ];



    // Relationship with Client model
    public function client()
    {
        return $this->belongsTo(Clients::class, 'client', 'cin');
    }

}
