<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CC extends Model
{
  protected $table = 'cc';
  protected $fillable = ['nombre', 'email','telefono']; 
}
