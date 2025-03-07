<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'titre',
        'image',
        'resume',
        'categorie_id',
        'description',
        'tags',
        'slug'
    ];

    public function categories(){

        return $this->belongsTo(Categorie::class, 'categorie_id');
    }
}
