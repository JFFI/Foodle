<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resenia extends Model
{
  public function Puesto(){
    return $this->belongsTo(App\Puesto);
  }

  public function User(){
    return $this->belongsTo(App\User);
  }
}
