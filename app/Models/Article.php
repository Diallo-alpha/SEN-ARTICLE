<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    protected $fillable = [
        'nom',
        'description',
        'image',
        'date_creation',
        'a_la_une',
    ];

    use HasFactory;

    /**
     * Récupère les commentaires associés à cet article.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function commentaires(): HasMany
    {
        return $this->hasMany(\App\Models\Commentaire::class);
    }
}

