<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoComida extends Model
{
  protected $table = "tipo_comidas";
  protected $fillable=['name'];
}
