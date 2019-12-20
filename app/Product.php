<?php

namespace App;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
	protected $fillable = ['title','text','color','price','discount'];

	use Sluggable;

	public function sluggable()
	{
		return [
			'slug' => [
				'source' => 'title'
			]
		];
	}

    public function scopeFilters($query, $param)
    {
        if (isset($param['category']) && trim($param['category'] !== ''))
        {
            $query->where('category_id', '=', trim($param['category']));
        }
        if(isset($param['min_price']) && $param['min_price'] != null && trim($param['min_price'] !== ''))
        {
            $query->where('price', '>=', $param['min_price']);
        }
        if(isset($param['max_price']) && $param['max_price'] != null && trim($param['max_price']) !== '')
        {
            $query->where('price', '<=', $param['max_price']);
        }
        
        return  $query;
    }

    public function scopeSearch($query, $param)
    {
        if(isset($param['query']))
        {
            $text = $param['query'];
            $query->where('title','like', "%$text%");
        }
        if(isset($param['cat']) && $param['cat'] != 0)
        {
            $query->where('category_id', $param['cat']);
        }
        return $query;
    }

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function images()
	{
		return $this->hasMany(Image::class);
	}

	public static function add($fields)
	{
		$product = new static;
		$product->fill($fields);
		$product->save();
		return $product;
	}

	public function edit($fields)
	{
		$this->fill($fields);
		$this->save();
	}

	public function remove()
	{
		$this->removeImages();
		$this->images()->delete();
		$this->delete();
	}

	public function uploadImage($images)
	{
		if(!empty($images))
		{
			foreach($images as $image)
			{
				$filename = str_random(10) . '.' . $image->extension();
				$image->storeAs('img/products', $filename);
				Image::create([
                'product_id' => $this->id,
                'filename' => $filename
            ]);
			}
		}
	}

	public function removeImages()
	{
		if($this->images != null)
		{
			foreach($this->images as $image)
			{
				Storage::delete('img/products/'. $image->filename);
			}
		}
	}

	public static function removeOneImage($id)
	{
		$image = Image::find($id);
		Storage::delete('img/products/'. $image->filename);
		$image->delete();

	}

	public function getImage()
	{
		if($this->images->count() == 0)
    	{
    		return '/img/no-image.png';
    	}
    	return '/img/products/' . $this->images()->first()->filename;
	}

    public function getImages()
    {
        if($this->images->count() != 0)
        {
            return $this->images();
        }
        return;
    }

	public function getCategoryTitle()
    {
        return ($this->category != null) 
                ?   $this->category->cat_title
                :   'Нет категории';
    }

    public function getCategoryID()
    {
        return $this->category != null ? $this->category->id : null;
    }

	public function setCategory($id)
    {
    	if($id == null) {return;}
    	$this->category_id = $id;
    	$this->save();
    }

    public function hot()
    {
    	$this->hot_deals = 1;
    	$this->save();
    }

    public function nothot()
    {
    	$this->hot_deals = 0;
    	$this->save();
    }

    public function toggle_hot_deals($value)
    {
    	if($value == null)
    	{
    		return $this->nothot();
    	}
    	
    	return $this->hot();
    }

    public function new()
    {
    	$this->is_new = 1;
    	$this->save();
    }

    public function notnew()
    {
    	$this->is_new = 0;
    	$this->save();
    }

    public function toggle_is_new($value)
    {
    	if($value == null)
    	{
    		return $this->notnew();
    	}
    	
    	return $this->new();
    }

    public function best()
    {
    	$this->is_best = 1;
    	$this->save();
    }

    public function notbest()
    {
    	$this->is_best = 0;
    	$this->save();
    }

    public function toggle_best($value)
    {
    	if($value == null)
    	{
    		return $this->notbest();
    	}
    	
    	return $this->best();
    }

    public function active()
    {
    	$this->is_active = 1;
    	$this->save();
    }

    public function disactive()
    {
    	$this->is_active = 0;
    	$this->save();
    }

    public function toggle_active($value)
    {
    	if($value == null)
    	{
    		return $this->disactive();
    	}
    	
    	return $this->active();
    }
}
