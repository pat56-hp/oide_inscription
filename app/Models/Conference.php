<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    protected $fillable = ['theme', 'debut', 'fin','mode','moderateur'];

    public function inscrits(){
        return $this->belongsToMany(Inscrit::class, 'inscrit_conference', 'conference_id', 'inscrit_id');
    }
}
