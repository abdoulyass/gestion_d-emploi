<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pointage extends Model
{  

    
    protected $fillable = ['user_id', 'heure_pointage'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
