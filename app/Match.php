<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $table = 'data_value';
    public $primarykey = "value_name";
    public $timestamps = false;
}
