<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'titre',
        'description',
        'slug'
    ];

    public function articles()
    {
        return $this->hasMany(Article::class, 'categorie_id');
    }
}
