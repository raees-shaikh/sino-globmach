<?php

namespace App\Http\Controllers\frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $productCategories = ProductCategory::latest()->paginate(12);
        return view('frontend.products.all-category', compact('productCategories'));
    }
    public function category($categorySlug)
    {
        $pCategory = ProductCategory::where('slug', $categorySlug)->firstOrFail();
        $products = $pCategory->products()->latest()->paginate(12);
        // dd($products);
        $relatedPCategories = ProductCategory::where('slug', '!=', $categorySlug)->latest()->limit(5)->get();
        return view('frontend.products.single-category', compact('pCategory', 'products', 'relatedPCategories'));
    }
    public function show($categorySlug, $pSlug)
    {
        $pCategory = ProductCategory::where('slug', $categorySlug)->firstOrFail();
        $product = Product::where('product_category_id', $pCategory->id)->where('slug', $pSlug)->firstOrFail();
        $relatedProducts = Product::where('product_category_id', $pCategory->id)->where('slug', '!=', $pSlug)->latest()->limit(5)->get();
        return view('frontend.products.single-product', compact('pCategory', 'product', 'relatedProducts'));
    }
}
