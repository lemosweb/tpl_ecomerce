<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;
use CodeCommerce\Category;
use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

class AdminCategoriesController extends Controller
{

    private $categoryModel;

    public function __construct(Category $category)
    {
        $this->categoryModel = $category;
    }

    public function index()
    {
        $categories = $this->categoryModel->paginate(5);

        return view('categories.index',compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Requests\CategoryRequest $request)
    {
        $input = $this->categoryModel->create($request->all());

        return redirect()->route('categories.index');

    }

    public function edit($id)
    {
        $category = $this->categoryModel->find($id);

        return view('categories.edit', compact('category'));
    }

    public function update(Requests\CategoryRequest $request, $id)
    {
        $this->categoryModel->find($id)->update($request->all());

        return redirect()->route('categories.index');
    }


    public function destroy($id)
    {

        $this->categoryModel->find($id)->delete();

        return redirect()->route('categories.index');
    }

}
