<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    const LIKE = 1;
    const DISLIKE = 2; 

    //Relación uno a muchos inverso
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    //likeable_id
    public function likeable()
    {
        return $this->morphTo();
    }

}
