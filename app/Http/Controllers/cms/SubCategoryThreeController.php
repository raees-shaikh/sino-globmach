<?php

namespace App\Http\Controllers\cms;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\SubCategoryOne;
use App\Models\SubCategoryTwo;
use Illuminate\Validation\Rule;
use App\Models\SubCategoryThree;
use App\Http\Controllers\Controller;

class SubCategoryThreeController extends Controller
{
    public function index()
    {
        $subCategoryThrees = SubCategoryThree::latest()->paginate(10);
        return view('cms.subCategoryThree.index', compact('subCategoryThrees'));
    }

    public function show($id)
    {
        $subCategoryThree = SubCategoryThree::findOrFail($id);
        return view('cms.subCategoryThree.show', compact('subCategoryThree'));
    }

    public function create()
    {
        $categories = Category::get();
        return view('cms.subCategoryThree.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $category = Category::pluck('id')->toArray();
        $subCategoryOne = SubCategoryOne::pluck('id')->toArray();
        $subCategoryTwo = SubCategoryTwo::pluck('id')->toArray();
        $request->validate([
            'name' => 'required|max:150|min:3|string|unique:sub_category_threes,name',
            'category_id' => ['required',Rule::in($category)],
            'sub_category_one_id' => ['required',Rule::in($subCategoryOne)],
            'sub_category_two_id' => ['required',Rule::in($subCategoryTwo)],
        ]);

        $subCategoryThree = new SubCategoryThree();
        $subCategoryThree->category_id = $request->category_id;
        $subCategoryThree->sub_category_one_id = $request->sub_category_one_id;
        $subCategoryThree->sub_category_two_id = $request->sub_category_two_id;
        $subCategoryThree->name = $request->name;
        $subCategoryThree->slug = Str::slug($request->name);
        if ($subCategoryThree->save()) {
            return redirect()->route('cms.subCategoryThree.index')->with(
                [
                    "message" => "Sub Category Three added Successfully", "alert-type" => "success"
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
        $subCategoryThree = SubCategoryThree::findOrFail($id);
        $categories = Category::get();
        return view('cms.subCategoryThree.edit', compact('subCategoryThree', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::pluck('id')->toArray();
        $subCategoryOne = SubCategoryOne::pluck('id')->toArray();
        $subCategoryTwo = SubCategoryTwo::pluck('id')->toArray();
        $request->validate([
            'name' => 'required|max:150|min:3|string|unique:sub_category_threes,name,' .$id,
            'category_id' => ['required',Rule::in($category)],
            'sub_category_one_id' => ['required',Rule::in($subCategoryOne)],
            'sub_category_two_id' => ['required',Rule::in($subCategoryTwo)],
        ]);

        $subCategoryThree = SubCategoryThree::findOrFail($id);
        $subCategoryThree->category_id = $request->category_id;
        $subCategoryThree->sub_category_one_id = $request->sub_category_one_id;
        $subCategoryThree->sub_category_two_id = $request->sub_category_two_id;
        $subCategoryThree->name = $request->name;
        $subCategoryThree->slug = Str::slug($request->name);
        if ($subCategoryThree->save()) {
            return redirect()->route('cms.subCategoryThree.index')->with(
                [
                    "message" => "Sub Category Three Updated Successfully", "alert-type" => "success"
                ]
            );
        } else {
            return redirect()->back()->with([
                "message" => "Something went wrong",
                "alert-type" => "error"
            ]);
        }
    }

    public function getSubCategoryOne($id)
    {
        $category = Category::findOrFail($id);
        $subCategoryOne = SubCategoryOne::where('category_id', $id)->get();
        return response()->json([
            'success' => true,
            'data' => $subCategoryOne,
        ]);
    }

    public function getSubCategoryTwo($id)
    {
        $subCategoryOne = SubCategoryOne::findOrFail($id);
        $subCategoryTwo = SubCategoryTwo::where('sub_category_one_id', $id)->get();
        return response()->json([
            'success' => true,
            'data' => $subCategoryTwo,
        ]);
    }

    public function delete($id)
    {
        $subCategoryThree = SubCategoryThree::findOrFail($id);
        if ($subCategoryThree->offers()->exists()) {
            return redirect()->back()->with(['alert-type' => 'info', 'message' => 'Offer is present']);
        };
        if ($subCategoryThree->delete()) {
            return redirect()->route('cms.subCategoryThree.index')->with(
                [
                    "message" => "Sub Category Three Deleted Successfully", "alert-type" => "success"
                ]
            );
        } else {
            return redirect()->route('cms.subCategoryThree.index')->with(
                [
                    "message" => "Something Went Wrong", "alert-type" => "error"
                ]
            );
        }
    }
}
