<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocData extends Model
{
    protected $fillable = array('ticket_id', 'status');
}
