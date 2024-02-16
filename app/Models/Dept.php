<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employe;
class Dept extends Model
{
    use HasFactory;
    protected $fillable = [
        'deptName'
    ];
    
    public function department()
    {
        return $this->belongsTo(Dept::class, 'dept_id');
    }
    public function offres(): HasMany
    {
        return $this->hasMany(Offre::class);
    }

    public function employe(): HasMany
    {
        return $this->hasMany(Employe::class);
    }
    

}
