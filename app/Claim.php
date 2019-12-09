<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    protected $table = 'claims';
    protected $primaryKey = "claim_id";
    public $timestamps = false;
}
