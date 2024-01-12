<?php

namespace App\Models;

use App\Models\Contrats;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
class Agences extends Model
{
    use HasFactory;
    protected $fillable = [
        'Agence',
        'Adresse',
        'Ville',
        'CodeP',
        'GSM',
        'gms',
        'telefix',
        'fax',
        'Email',
        'Nomfran',
        'prenomFrance',
        'cine',
        'telephone',
        'logo',
        'patent',
        'rc',
        'iff',
        'ice',
        'cnss',
        'condition',
        'Bancaire',

    ];
        // Relationship with Contrat model
        public function contrat()
        {
            return $this->hasMany(Contrats::class, 'agence', 'agenceid');
        }
        public function user()
        {
            return $this->hasOne(User::class, 'agence_id');
        }
   
}
