<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  public function platillos(){
    return $this->belongsToMany('App\Platillo','tags_platillos');
  }

}
