<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // Relacion de uno a uno inversa 
    public function description(){
        return $this->belongsTo('App\Models\Lesson');
    }    
}
