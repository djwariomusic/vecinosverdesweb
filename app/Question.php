<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $primaryKey = 'idquestion';
    protected $foreighKey = 'idlesson';
}
