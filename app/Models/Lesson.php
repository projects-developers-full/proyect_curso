<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // Relacion de uno a uno 
    public function description(){
        return $this->hasMany('App\Models\Description');
    }
    //Relacion uno a muchos inversa 
    public function sections(){
        return $this->belongsTo('App\Models\Section');
    }        
   //Relacion uno a muchos inversa 
   public function platform(){
    return $this->belongsTo('App\Models\Platform');
    }            
    //Relacion muchos a muchos 
    public function users(){
        return $this->belongsToMany('App\Models\User');
    } 
    //Relación uno a uno polimórfica
    //Al siguiente método se pasan 2 parámetros, modelo resource y el nombre del método que está dentro del modelo, para indicar que se aceptan relaciones polimórficas    
     public function resource(){
        return $this->morphOne('App\Models\Resource','resourceable');
    }
    //Relación uno a muchos polimórfica
    public function comments(){
        return $this->morphMany('App\Models\Comment','commentable');
    }
    //Relación uno a muchos polimórfica
    public function reactions(){
        return $this->morphMany('App\Models\Reaction','likeable');
    }
}
