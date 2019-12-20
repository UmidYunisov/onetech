<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
	public $fillable = ['cat_title','slug','parent_id'];

	use Sluggable;

	public function sluggable()
	{
		return [
			'slug' => [
				'source' => 'cat_title'
			]
		];
	}
	

	public function products()
	{
		return $this->hasMany(Product::class);
	}

	public function parent()
	{
	    return $this->belongsTo(self::class, 'parent_id');
	}

	public function children() 
	{
        return $this->hasMany(self::class, 'parent_id') ;
    }
}
