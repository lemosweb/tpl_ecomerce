<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Contracts\Mail\MailQueue;
use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\Category;
use CodeCommerce\Product;

class StoreController extends Controller
{

    protected $mailer;

    function __construct(MailQueue $mailer)
    {
        $this->mailer = $mailer;
    }

    public function index()
    {
        $pFeatured = Product::featured()->get();
        $pRecommended = Product::recommended()->get();

        $categories = Category::all();

        return view('store.index', compact('categories','pFeatured','pRecommended'));
    }

    public function category($id)
    {
        $categories = Category::all();
        $category = Category::find($id);
        $products = Product::ofCategory($id)->get();

        return view('store.category', compact('categories', 'products', 'category'));

    }

    public function product($id)
    {
        $categories = Category::all();
        $product = Product::find($id);

        return view('store.product', compact('categories', 'product'));
    }

    public function all()
    {
        return $this->items;
    }

    public function getTotal()
    {
        $total = 0;
        foreach($this->items as $items){

            $total += $items['qtd'] * $items['price'];

        }

        return $total;
    }


}
