<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = ['name', 'keywords', 'description', 'active'];
	
    public $timestamps = false;
}
