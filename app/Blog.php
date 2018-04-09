<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
	protected $fillable = ['title', 'image', 'sub_content', 'content', 'category', 'keywords', 'description'];
	
    public $timestamps = false;
}
