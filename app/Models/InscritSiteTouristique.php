<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InscritSiteTouristique extends Model
{
    use HasFactory;

    protected $table = 'inscrit_sites_touristiques';
    protected $fillable = ['inscrit_id', 'name', 'description', 'price', 'image'];

    public function inscrit()
    {
        return $this->belongsTo(Inscrit::class);
    }
}
