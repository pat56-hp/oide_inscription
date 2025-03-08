<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inscrit extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'inscrits';
    protected $fillable = [
        'civilite', 'nom', 'prenoms', 'genre', 'email', 'nationalite',
        'pays_residence', 'inscription_tant_que', 'langue_com', 'numero_tel','lieu_touristique',
        'etat', 'deleted_at'
    ];

    public function sitesTouristiques()
    {
        return $this->hasMany(InscritSiteTouristique::class);
    }

    public function conferences(){
        return $this->belongsToMany(Conference::class, 'inscrit_conference', 'inscrit_id', 'conference_id');
    }
}
