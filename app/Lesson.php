<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
  protected $primaryKey = 'idlesson';

  public function courseLessons()
  {
  return $this->belongsTo(Courses::class);
  }
}
