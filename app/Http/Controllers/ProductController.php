<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function categories()
    {
        $categories = Category::withCount([
            'products' => function ($query) {
                $query->where('available', true);
            }
        ])->get();

        return view('products.categories', [
            'categories' => $categories
        ]);
    }

    public function index(Category $category)
    {
        $products = Product::with('category')
            ->where('category_id', $category->id)
            ->where('available', true)
            ->orderBy('name')
            ->get();

        return view('products.index', [
            'products' => $products,
            'category' => $category
        ]);
    }
}