<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstName',
        'name',
        'email',
        'password',
         'adress',
         'role',
         'user_number',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }
    
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function pointage()
    {
        return $this->hasMany(Pointage::class);
    }

    public function cv()
    {
        return $this->hasOne(CV::class);
    }
    public function employe(): HasOne
    {
        return $this->hasOne(Employe::class);
    }

    public function isAdmin(){
        if($this->role==3){
            return true;

        }else{
            return false;
        }
    }
   
}
