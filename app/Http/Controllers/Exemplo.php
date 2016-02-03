<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;
use CodeCommerce\Category;
use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

class Exemplo extends Controller
{

    private $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index()
    {

        $categories = $this->category->all();

        return view('index',compact('categories'));
    }
}
