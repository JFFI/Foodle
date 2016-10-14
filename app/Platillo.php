<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Platillo extends Model
{
  public function tags(){
    return $this->belongsToMany('App\Tag','tags_platillos');
  }
  public function Puesto(){
    return $this->belongsTo('App\Puesto');
  }
}
