<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;
use CodeCommerce\Http\Requests\ProductRequest;
use CodeCommerce\Product;
use CodeCommerce\Category;
use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

class AdminProductsController extends Controller
{

    private $product;
    private $category;

    public function __construct(Product $product)
    {
        $this->product = $product;


    }

    public function index()
    {

        $products = $this->product->paginate(5);

        return view('products.index',compact('products'));
    }

    public function create(Category $category)
    {

        $categories = $category->all();

        return view('products.create', compact('categories'));
    }

    public function store(ProductRequest $request)
    {
        //dd($request);
        $input = $this->product->create($request->all());

        return redirect()->route('products.index');
    }

    public function edit($id, Category $category)
    {

        $product = $this->product->find($id);

        $categories = $category->all();

        return view ('products.edit', compact('product', 'categories'));
    }

    public function update(ProductRequest $request, $id)
    {
        $this->product->find($id)->update($request->all());

        return redirect()->route('products.index');
    }

    public function destroy($id){

        $this->product->find($id)->delete();

        return redirect()->route('products.index');
    }
}
