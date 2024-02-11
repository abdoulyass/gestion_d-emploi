<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;
    protected $fillable = [
        'poste',
        'fonction',
        'experience_min',
        'experience_max',
        'niveau_etude',
        'type_contrat',
        // 'departement_id',
        'dept_id',
    ];


    public function depts(): BelongsTo
    {
        return $this->belongsTo(Dept::class);
    }
}
