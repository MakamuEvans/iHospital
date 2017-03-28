<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    public $table='clients';


    protected $fillable = array('first_name', 'last_name', 'id_no', 'gender', 'yob',
        'type',
        'phone', 'address','email',
        'next_of_keen', 'next_of_keen_type','contact');
}
