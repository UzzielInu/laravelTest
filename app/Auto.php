<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
  protected $guarded = ['id'];
  protected $fillable = ['nombre','precio'];
}