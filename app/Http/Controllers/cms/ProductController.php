<?php

namespace App\Http\Controllers\cms;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(10);
        // dd($products);
        return view('cms.product.index', compact('products'));
    }

    public function show($id)
    {
        $products = Product::findOrFail($id);
        // dd($products);
        return view('cms.product.show', compact('products'));
    }


    public function create()
    {
        $product_categories = ProductCategory::get();
        return view('cms.product.create', compact('product_categories'));
    }

    public function store(Request $request)
    {
        $productcategory = ProductCategory::pluck('id')->toArray();
        $request->validate([
            'title' => 'required|max:150|min:3|string|unique:products,title',
            'product_category_id' => ['required',Rule::in($productcategory)],
            'body' => 'nullable|min:3|max:10000',
            'product_image' => 'nullable|mimes:jpeg,png,jpg|max:1024',
        ]);

        $products = new Product;
        if ($request->hasFile('product_image')) {
            $file = $request->file('product_image');
            $destinationPath = storage_path('app/public/images/products/');
            $filename = saveFile($file, $destinationPath);
            $products->image = $filename;
        }
        $products->product_category_id = $request->product_category_id;
        $products->title = $request->title;
        $products->slug = Str::slug($request->title);
        $products->body = $request->body;
        if ($products->save()) {
            return redirect()->route('cms.product.index')->with(
                [
                    "message" => "Product Created Successfully", "alert-type" => "success"
                ]
            );
        } else {
            return redirect()->back()->with([
                "message" => "Something went wrong",
                "alert-type" => "error"
            ]);
        }
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $product_categories = ProductCategory::get();
        return view('cms.product.edit', compact('product', 'product_categories'));
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        $productcategory = ProductCategory::pluck('id')->toArray();
        $request->validate([
            'title' => 'required|max:150|min:3|string|unique:products,title,' . $id,
            'product_category_id' => ['required',Rule::in($productcategory)],
            'body' => 'nullable|min:3|max:10000',
            'product_image' => 'nullable|mimes:jpeg,png,jpg|max:1024',
            //'description' => 'required|min:30|max:150'
        ]);

        $products = Product::findOrFail($id);
        if ($request->hasFile('product_image')) {
            if (!Storage::exists('images/products/' . $products->image)) {
                Storage::disk('public')->delete('images/products/' . $products->image);
            }
            $file = $request->file('product_image');
            $destinationPath = storage_path('app/public/images/products/');
            $filename = saveFile($file, $destinationPath);
            $products->image = $filename;
        }
        $products->product_category_id = $request->product_category_id;
        $products->title = $request->title;
        $products->slug = Str::slug($request->title);
        //$products->description = $request->description;
        $products->body = $request->body;
        if ($products->save()) {
            return redirect()->route('cms.product.index')->with(
                [
                    "message" => "Product Updated Successfully", "alert-type" => "success"
                ]
            );
        } else {
            return redirect()->back()->with([
                "message" => "Something went wrong",
                "alert-type" => "error"
            ]);
        }
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        optional(Storage::disk('public')->delete('images/products/' . $product->image));
        if ($product->delete()) {
            return redirect()->route('cms.product.index')->with(
                [
                    "message" => "Product Deleted Successfully", "alert-type" => "success"
                ]
            );
        } else {
            return redirect()->route('cms.product.index')->with(
                [
                    "message" => "Something Went Wrong", "alert-type" => "error"
                ]
            );
        }
    }
}
