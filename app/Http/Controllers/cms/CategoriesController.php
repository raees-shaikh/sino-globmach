<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\offer;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->paginate(10);
        return view('cms.categories.index', compact('categories'));
    }
    public function show($id)
    {
        $categories = Category::findOrFail($id);
        return view('cms.categories.show', compact('categories'));
    }
    public function create()
    {
        return view('cms.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:60|min:3|string|unique:categories,title',
           // 'categories_image' => 'required|mimes:jpeg,png,jpg|max:1024',
            // 'body' => 'nullable|min:3|max:2000',
        ]);
        $categories = new Category;
        // if ($request->hasFile('categories_image')) {
        //     $file = $request->file('categories_image');
        //     $destinationPath = storage_path('app/public/images/latest_arrival/');
        //     $filename = saveFile($file, $destinationPath);
        //     $categories->image = $filename;
        // }
        $categories->title = $request->title;
        // $categories->body = $request->body;
        $categories->slug = Str::slug($request->title);

        if ($categories->save()) {
            return redirect()->route('cms.categories.index')->with(["message" => "Category Created", "alert-type" => "success"]);
        } else {
            return redirect()->back()->with(["message" => "Something went wrong", "alert-type" => "error"]);
        }
    }

    public function edit(Request $request, $id)
    {

        $categories = Category::findOrFail($id);
        return view('cms.categories.edit', compact('categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:60|min:3|string|unique:categories,title,' . $id,
            //'categories_image' => 'nullable|mimes:jpeg,png,jpg|max:1024',
            // 'body' => 'nullable|min:3|max:2000',
        ]);
        $categories = Category::findOrFail($id);
        // if ($request->hasFile('categories_image')) {
        //     if (!Storage::exists('images/latest_arrival/' . $categories->image)) {
        //         Storage::disk('public')->delete('images/latest_arrival/' . $categories->image);
        //     }
        //     $file = $request->file('categories_image');
        //     $destinationPath = storage_path('app/public/images/latest_arrival/');
        //     $filename = saveFile($file, $destinationPath);
        //     $categories->image = $filename;
        // }
        $categories->title = $request->title;
        // $categories->body = $request->body;
        $categories->slug = Str::slug($request->title);
        if ($categories->save()) {
            return redirect()->route('cms.categories.index')->with(
                [
                    "message" => "Category Updated", "alert-type" => "success"
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
        $latest_arrival = Category::findOrFail($id);
        // dd(Storage::disk('public')->delete('images/latest_arrival/' . $latest_arrival->image));
        //    dd($latest_arrival->offers()->get());
        //checking any offer exist for this categories
        $offerexist = Offer::where('category_id', $id);
        // if ($latest_arrival->offers()->exists() || $latest_arrival->subCategoryOne()->exists() || $latest_arrival->subCategoryTwo()->exists() || $latest_arrival->subCategoryThree()->exists()) {
        //     return redirect()->back()->with(['alert-type' => 'info', 'message' => 'Offer/Sub Category is present']);
        // };
        if ($latest_arrival->offers()->exists()) {
            return redirect()->back()->with(['alert-type' => 'info', 'message' => 'Offer is present']);
        };
       // Storage::disk('public')->delete('images/latest_arrival/' . $latest_arrival->image);
        if ($latest_arrival->delete()) {
            return redirect()->route('cms.categories.index')->with(
                [
                    "message" => "Category Deleted", "alert-type" => "success"
                ]
            );
        } else {
            return redirect()->route('cms.categories.index')->with(
                [
                    "message" => "Something Went Wrong", "alert-type" => "error"
                ]
            );
        }
    }
}
