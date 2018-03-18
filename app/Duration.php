<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Duration extends Model
{
    protected $fillable = ['name', 'active'];
	
    public $timestamps = false;
}
