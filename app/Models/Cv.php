<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Link;
class Cv extends Model
{
    use HasFactory;
      
    protected $fillable = ['title', 'description', 'additional_information','user_id'];

    protected $casts = [
        'additional_information' => 'array',
    ];

     
    public function user()
    {
        return $this->belongsTo(User::class);
    }
   

    public function Link(): HasMany
    {
        return $this->hasMany(Link::class);
    }
   
}
