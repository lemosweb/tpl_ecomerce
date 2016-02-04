<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $fillable = ['name', 'description'];
}
