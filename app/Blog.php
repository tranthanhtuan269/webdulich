<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Blog extends Model
{
	use Sluggable;

	protected $fillable = ['title', 'image', 'sub_content', 'content', 'category', 'slug', 'keywords', 'description'];
	
    public $timestamps = false;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
