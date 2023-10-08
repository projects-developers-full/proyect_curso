<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    //Relación uno a uno inversa
    public function profile_user(){
        return $this->belongsTo('App\Models\User'); 
    } 
}
