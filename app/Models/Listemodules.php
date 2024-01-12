<?php

namespace App\Models;

use App\Models\Listemarques;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listemodules extends Model
{
    use HasFactory;

    protected $fillable = [
        'modulenom',
        'category',
        'marque_id',


    ];
        // Relationship with Listemarque model
        public function listemarque()
        {
            return $this->belongsTo(Listemarques::class, 'marquenom', 'marquenom');
        }
}
