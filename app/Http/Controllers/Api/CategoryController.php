<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\CategoryStore;
use App\Http\Resources\CategoryCollection;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return new CategoryCollection(Category::all());
    }

    public function create(CategoryStore $request)
    {
        $category = new Category();
        $category->name = $request->get('name');
        $category->save();

        return [
            'id'=>$category->getKey()
        ];
    }

    public function delete(Category $category)
    {
        $category->delete();
    }

    public function update(CategoryStore $request,Category $category)
    {
        $category->name = $request->get('name');
        $category->save();
    }
}
