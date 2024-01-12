<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revenus extends Model
{
    use HasFactory;

    protected $fillable = [
        'Motif',
        'datecharge',
        'montant',
        'observation',
        'pj',
      
    ];


}
