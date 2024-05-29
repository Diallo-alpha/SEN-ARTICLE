<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $fillable = [
        'contenue',
        'nom_complet_auteur',
        'date_heure_commentaire',
    ];
    use HasFactory;
}
