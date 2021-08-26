<?php

namespace App\Models;

// On importe le "CoreModel" de Lumen
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Automatiquement, Eloquent va par défaut chercher dans la table
    // correspondant au nom du modèle mis au pluriel :
    // Modèle Category => on va chercher dans la table 'categories'
    // Sj jamais, ça ne correspond pas au nom de notre table, on peut
    // toujours préciser à Lumen le nom de la table pour ce modèle
    // en rajoutant une propriété protected $table
    // A partir des champs de la table 'categories', Eloquent va
    // déduire automatiquement les propriétés du modèle Category !

    






}
