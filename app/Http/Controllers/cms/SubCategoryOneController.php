<?php

namespace App\Http\Controllers\cms;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\SubCategoryOne;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class SubCategoryOneController extends Controller
{
    public function index()
    {
        $subCategoryOnes = SubCategoryOne::latest()->paginate(10);
        return view('cms.subCategoryOne.index', compact('subCategoryOnes'));
    }

    public function show($id)
    {
        $subCategoryOne = SubCategoryOne::findOrFail($id);
        return view('cms.subCategoryOne.show', compact('subCategoryOne'));
    }

    public function create()
    {
        $categories = Category::get();
        return view('cms.subCategoryOne.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $category = Category::pluck('id')->toArray();
        $request->validate([
            'name' => 'required|max:150|min:3|string|unique:sub_category_ones,name',
            'category_id' => ['required', Rule::in($category)],
        ]);

        $subCategoryOne = new SubCategoryOne();
        $subCategoryOne->category_id = $request->category_id;
        $subCategoryOne->name = $request->name;
        $subCategoryOne->slug = Str::slug($request->name);
        if ($subCategoryOne->save()) {
            return redirect()->route('cms.subCategoryOne.index')->with(
                [
                    "message" => "Sub Category One added Successfully", "alert-type" => "success"
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
        $subCategoryOne = SubCategoryOne::findOrFail($id);
        $categories = Category::get();
        return view('cms.subCategoryOne.edit', compact('subCategoryOne', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::pluck('id')->toArray();
        $request->validate([
            'name' => 'required|max:150|min:3|string|unique:sub_category_ones,name,' . $id,
            'category_id' => ['required', Rule::in($category)],
        ]);

        $subCategoryOne = SubCategoryOne::findOrFail($id);
        $subCategoryOne->category_id = $request->category_id;
        $subCategoryOne->name = $request->name;
        $subCategoryOne->slug = Str::slug($request->name);
        if ($subCategoryOne->save()) {
            return redirect()->route('cms.subCategoryOne.index')->with(
                [
                    "message" => "Sub Category One Updated Successfully", "alert-type" => "success"
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
        $subCategoryOne = SubCategoryOne::findOrFail($id);
        if ($subCategoryOne->offers()->exists() || $subCategoryOne->subCategoryTwo()->exists() || $subCategoryOne->subCategoryThree()->exists()) {
            return redirect()->back()->with(['alert-type' => 'info', 'message' => 'Offer/Sub Category is present']);
        };
        if ($subCategoryOne->delete()) {
            return redirect()->route('cms.subCategoryOne.index')->with(
                [
                    "message" => "Sub Category One Deleted Successfully", "alert-type" => "success"
                ]
            );
        } else {
            return redirect()->route('cms.subCategoryOne.index')->with(
                [
                    "message" => "Something Went Wrong", "alert-type" => "error"
                ]
            );
        }
    }
}
