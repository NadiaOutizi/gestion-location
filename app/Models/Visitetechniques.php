<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitetechniques extends Model
{
    use HasFactory;
    protected $fillable = [
        'centre',
        'identicontrol',
        'nauturisation',
        'datevisite',
        'duree',
        'datefin',
        'prix',
        'contact',
        'observation',
        'matricule',
        'module',
        'pj',
        'visitetechniquepic',
        'etat',
      
    ];
}
