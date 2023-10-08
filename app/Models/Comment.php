<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    //Se genera el método, el nombre deriva del campo a quien se le asignó el nombre para dicha relación 
    public function commentable()
    {
        return $this->morphTo();
    }
    //Relación uno a muchos inverso
    public function user(){
    return $this->belongsTo('App\Models\User');
    }
    //Relación uno a muchos polimórfica
    public function comments(){
        return $this->morphMany('App\Models\Comment','commentable');
    } 
    //los comentarios podrán recibir reacciones 
    public function reaction(){
        return $this->morphMany('App\Models\Reaction','likeable');
    } 

}
