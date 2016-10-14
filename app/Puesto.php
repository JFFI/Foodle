<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{
  protected $fillable = [
    'nombre','x','y'
  ];

  public function Resenias(){
    return $this->hasMany('App\Resenia');
  }
  public function Platillos(){
    return $this->hasMany('App\Platillo');
  }
}
