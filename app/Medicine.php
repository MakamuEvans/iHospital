<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{

    protected $fillable = array('prescription_id', 'medicine', 'alternative', 'status');

}
