<?php

namespace App\Models;

use App\Models\Nouvellevoitures;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listeinterventions extends Model
{
    use HasFactory;
    protected $fillable = [
        'typeinter',
        'dateinterve',
        'maticule',
        'vehicule',
        'cout',
        'kilomactule',
        'prochenkilo',
        'pj',
        'observatio',

    ];

    // Relationship with Nouvellevoiture model
    public function nouvellevoiture()
    {
        return $this->belongsTo(Nouvellevoitures::class, 'maticule', 'matricule');
    }





}
