<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['name', 'image', 'icon', 'sub_content', 'content', 'active'];

    public $timestamps = false;
}
