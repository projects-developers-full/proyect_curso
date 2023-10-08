<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded = ['id','status'];
    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;

    //Relación uno a muchos
    public function review()
    {
        return $this->hasMany('App\Models\Review');
    }
    public function requirements()
    {
        return $this->hasMany('App\Models\Requeriment');
    }
    public function goals()
    {
        return $this->hasMany('App\Models\Goal');
    }
    public function audiences()
    {
        return $this->hasMany('App\Models\Audience');
    }
    public function sections()
    {
        return $this->hasMany('App\Models\Section');
    }
    //Relación uno a muchos
    public function course_lavel()
    {
        return $this->belongsTo('App\Models\Lavel');
    }

    public function course_category()
    {
        return $this->belongsTo('App\Models\Lavel');
    }

    public function course_price()
    {
        return $this->belongsTo('App\Models\Lavel');
    }

    //Relación uno a muchos inversa / encargar de recuperar el usuario que a dictado el curso
    // se declara la llave foranea 
    public function teacher()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    //Relación muchos a muchos / metodo que se encargara de recuperera todos los estudiantes que tengan el curso 
    public function students()
    {
        return $this->BelongsToMany('App\Models\User');
    }
    //Relación uno a uno polimórfica 
    public function image()
    {
        $this->morphOne('App\Models\Image', 'imageable');
    }
    //retornamos la siguiente relación, pasamos dos parámetros el primer parámetro es el modelo Lesson y el segundo parámetro es el modelo de la tabla intermedia es decir el modelo Section 
    public function lessons()
    {
        return $this->hasManyThrough('App\Models\Lesson', 'App\Models\Secction');
    }
}
