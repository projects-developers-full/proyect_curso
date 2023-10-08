<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    //resourceable_id
    //relacion uno a uno
    public function resourceable()
    {
        return $this->morphTo();
    }

}
