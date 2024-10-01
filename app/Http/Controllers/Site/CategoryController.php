<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('site.category.index',[
            'categories'=> Category::all(),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        // Carrega a relação 'products' no objeto $category
        $category->load('products');

        // Retorna a view com a categoria e seus produtos
        return view('site.category.show', ['category' => $category]);
    }

}