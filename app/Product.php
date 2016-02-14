<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['category_id', 'name', 'description', 'price', 'featured', 'recommended'];

    public function category()
    {
        return $this->belongsTo('CodeCommerce\Category');
    }

    public function images()
    {
        return $this->hasMany('CodeCommerce\ProductImage');
    }

    public function tags()
    {
        return $this->belongsToMany('CodeCommerce\Tag','product_tag');
    }

    public function getNameDescriptionASttribute()
    {
        return $this->name." - ".$this->description;
    }

    public function getTagListAttribute()
    {

        $tags = $this->tags->lists('name');



        return implode(',', $tags);


    }
}
