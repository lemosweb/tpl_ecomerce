<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    protected $fillable = ['name', 'description', 'price'];
}
