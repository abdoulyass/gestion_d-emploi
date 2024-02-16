<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Dept;
class Employe extends User
{
    use HasFactory;
    protected $fillable = [
        'salary',
        'depts_id',
        'name',
        'email',

    ];

    public function employes(): BelongsTo
    {
        return $this->belongsTo(Dept::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    

}
