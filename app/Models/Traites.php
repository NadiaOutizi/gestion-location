<?php

namespace App\Models;

use App\Models\Nouvellevoitures;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Traites extends Model
{
    use HasFactory;
    protected $fillable = [
        'matricule',
        'datetrait',
        'observation',
        'montant',
      
      
    ];
    public function nouvellevoiture()
    {
        return $this->belongsTo(Nouvellevoitures::class, 'matricule', 'matricule');
    }
}
