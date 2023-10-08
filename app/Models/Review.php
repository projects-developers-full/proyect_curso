<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    //Relación uno a muchos inversa 
    public function review_user(){
        return $this->belongsTo('App\Models\User');
    }

    public function review_course(){
        return $this->belongsTo('App\Models\Course');
    }    
}
