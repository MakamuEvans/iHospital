<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LabData extends Model
{

    protected $fillable = array('doc_id', 'assigned_to', 'status');

}
