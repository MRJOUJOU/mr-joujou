<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    protected $fillable = [
        'nom',
        'description'

    ];

    public function telephones()
    {
        return $this->hasMany(Marque::class, 'marque_id');
    }
}
