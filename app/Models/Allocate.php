<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allocate extends Model
{
    use HasFactory;
    
    public function applicants(){
        return $this->belongsTo('App\Models\Applicant');
    }
}
