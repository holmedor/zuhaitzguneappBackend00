<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArbolesEjemplo extends Model
{
    //
    protected $table = 'larraskitu';

    public $timestamp = false;

    protected $fillable = ['diametro', 'altura','nombre','geom'];


}
