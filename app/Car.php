<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
    protected $table="cars";

    //to avoid massassignment you have to declare the fields the user is allowed to fill
    protected $fillable = array('make', 'model', 'produced_on');

}
