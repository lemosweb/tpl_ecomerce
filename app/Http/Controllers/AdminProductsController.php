<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\ProductImage;
use Illuminate\Http\Request;
use CodeCommerce\Http\Requests\ProductRequest;
use CodeCommerce\Product;
use CodeCommerce\Category;
use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


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

        $product = $this->product->find($id);

        $product['featured'] = $request->get('featured') ? true : false;
        $product['recommended'] = $request->get('recommended') ? true : false;

        $product->update($request->all());


        return redirect()->route('products.index');
    }

    public function destroy($id){

        $this->product->find($id)->delete();

        return redirect()->route('products.index');
    }

    public function images($id)
    {
        $product = $this->product->find($id);

        return view('products.images', compact('product'));
    }

    public function createImage($id)
    {
        $product = $this->product->find($id);

        return view('products.create_image', compact('product'));
    }

    public function storeImage(Requests\ProductImageRequest $request, $id, ProductImage $productImage)
    {
        $file = $request->file('image');

        $extension = $file->getClientOriginalExtension();

        $image = $productImage::create(['product_id'=> $id, 'extension' => $extension ]);

        Storage::disk('public_local')->put($image->id.'.'.$extension, File::get($file));

        return redirect()->route('products.images',['id' => $id]);

    }

    public function destroyImage(ProductImage $productImage, $id)
    {
        $image = $productImage->find($id);

        if(file_exists(public_path('uploads/'.$image->id.'.'.$image->id)))
        {
            Storage::disk('public_local')->delete($image->id.'.'.$image->extension);

        }

        $product = $image->product;
        $image->delete();

        return redirect()->route('products.images', ['id' => $product->id]);

    }
}
