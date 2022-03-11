<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //para que no me traiga la fecha de creación y actulización
    public $timestamps = false;

    //para que me traiga los campos que se necesitan
    protected $fillable = ['id', 'cat_nom', 'cat_obs'];
}
