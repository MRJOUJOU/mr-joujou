<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Telephone extends Model
{
    protected $fillable = [
        'nom',
        'ram',
        'memoire',
        'processeur',
        'marque_id'

    ];

    public function marques(){

        return $this->belongsTo(Marque::class, 'marque_id');
    }
}
