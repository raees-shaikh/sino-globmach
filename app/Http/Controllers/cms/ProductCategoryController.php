<?php

namespace App\Http\Controllers\cms;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $product_categories = ProductCategory::latest()->paginate(10);
        return view('cms.productCategories.index', compact('product_categories'));
    }

    public function show($id)
    {
        $product_categories = ProductCategory::findOrFail($id);
        return view('cms.productCategories.show', compact('product_categories'));
    }

    public function create()
    {
        return view('cms.productCategories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:60|min:3|string|unique:product_categories,title',
            // 'categories_image' => 'nullable|mimes:jpeg,png,jpg|max:1024',
            // 'body' => 'nullable|min:3|max:190',
        ]);
        $product_categories = new ProductCategory;
        // if ($request->hasFile('categories_image')) {
        //     $file = $request->file('categories_image');
        //     $destinationPath = storage_path('app/public/images/product_categories/');
        //     $filename = saveFile($file, $destinationPath);
        //     $product_categories->image = $filename;
        // }
        $product_categories->title = $request->title;
        // $product_categories->body = $request->body;
        $product_categories->slug = Str::slug($request->title);

        if ($product_categories->save()) {
            return redirect()->route('cms.productCategories.index')->with(
                [
                    "message" => "Product Category added", "alert-type" => "success"
                ]
            );
        } else {
            return redirect()->back()->with([
                "message" => "Something went wrong",
                "alert-type" => "error"
            ]);
        }
    }

    public function edit(Request $request, $id)
    {
        $product_category = ProductCategory::findOrFail($id);
        return view('cms.productCategories.edit', compact('product_category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:60|min:3|string|unique:product_categories,title,' . $id,
            // 'categories_image' => 'nullable|mimes:jpeg,png,jpg|max:1024',
            // 'body' => 'nullable|min:3|max:190',
        ]);
        $product_categories = ProductCategory::findOrFail($id);
        // if ($request->hasFile('categories_image')) {
        //     if (!Storage::exists('images/product_categories/' . $product_categories->image)) {
        //         Storage::disk('public')->delete('images/product_categories/' . $product_categories->image);
        //     }
        //     $file = $request->file('categories_image');
        //     $destinationPath = storage_path('app/public/images/product_categories/');
        //     $filename = saveFile($file, $destinationPath);
        //     $product_categories->image = $filename;
        // }
        $product_categories->title = $request->title;
        // $product_categories->body = $request->body;
        $product_categories->slug = Str::slug($request->title);
        if ($product_categories->save()) {
            return redirect()->route('cms.productCategories.index')->with(
                [
                    "message" => "Product Category Updated", "alert-type" => "success"
                ]
            );
        } else {
            return redirect()->back()->with([
                "message" => "Something went wrong",
                "alert-type" => "error"
            ]);
        }
        // if($latestoffers->delete())
        // {
        //     return redirect()->route('categoriesoffer.index')->with(
        //         ["message" => "Latest Offer Deleted","alert-type" => "success"
        //     ]);
        // }
        // else{
        //     return redirect()->route('categoriesoffer.index')->with(
        //         ["message" => "Internal Error","alert-type" => "error"
        //     ]);
        // }
    }

    public function delete($id)
    {
        $product_categories = ProductCategory::findOrFail($id);

        //checking any offer exist for this categories
        $productexist = Product::where('product_category_id', $id);
        if (!$productexist->exists()) {
            // Storage::disk('public')->delete('images/product_categories/' . $product_categories->image);
            if ($product_categories->delete()) {
                return redirect()->route('cms.productCategories.index')->with(
                    [
                        "message" => "Product Category Deleted", "alert-type" => "success"
                    ]
                );
            } else {
                return redirect()->route('cms.productCategories.index')->with(
                    [
                        "message" => "Something Went Wrong", "alert-type" => "error"
                    ]
                );
            }
        } else {
            return redirect()->route('cms.productCategories.index')->with(
                [
                    "message" => "Product Exist in this Product Category", "alert-type" => "error"
                ]
            );
        }
    }
}
