<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    protected $fillable = ['name', 'active'];
	
    public $timestamps = false;
}
