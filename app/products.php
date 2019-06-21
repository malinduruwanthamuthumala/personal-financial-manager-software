<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
      //table name
      protected $table  = 'products';
      //primary key
      public $primaryKey= 'id';
      //time stamp
      public $timestamps= 'true';
}
