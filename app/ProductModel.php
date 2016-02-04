<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $fillable = ['category_id', 'name', 'description', 'price'];
}
