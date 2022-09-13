<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;
    // to change primary key

    public function allocates(){
        return $this->hasOne('App\Models\Allocate');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
