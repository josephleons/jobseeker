<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'users_id'
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

    // check admin roles
    public function is_admin(){
        return $this->roles()->where('name','admin')->exists();
    }
//    check client roles
    public function is_client(){
        return $this->roles()->where('name','client')->exists();
    }
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts(){
        return $this->hasMany('App\Models\Post');
    }

    public function companys(){
        return $this->hasMany('App\Models\Company');
    }
    public function employee(){
        return $this->hasMany('App\Models\Employee');
    }

    public function applicants(){
        return $this->hasMany(Applicant::class,'users_id');
    
    }
    public function roles(){
        return $this->hasMany(Role::class,'user_id');
    }



    
}
