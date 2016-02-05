<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;
use CodeCommerce\Http\Requests\ProductRequest;
use CodeCommerce\Product;
use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

class AdminProductsController extends Controller
{

    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {

        $products = $this->product->paginate(5);

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(ProductRequest $request)
    {
        $input = $this->product->create($request->all());

        return redirect()->route('products.index');
    }
}
