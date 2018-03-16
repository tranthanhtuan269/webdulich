<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteConfig extends Model
{
    protected $fillable = ['name', 'text'];

    public $timestamps = false;
}
