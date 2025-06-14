<?php

namespace App\Http\Controllers\cms;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\SubCategoryOne;
use App\Models\SubCategoryTwo;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class SubCategoryTwoController extends Controller
{
    public function index()
    {
        $subCategoryTwos = SubCategoryTwo::latest()->paginate(10);
        return view('cms.subCategoryTwo.index', compact('subCategoryTwos'));
    }

    public function show($id)
    {
        $subCategoryTwo = SubCategoryTwo::findOrFail($id);
        return view('cms.subCategoryTwo.show', compact('subCategoryTwo'));
    }

    public function create()
    {
        $categories = Category::get();
        return view('cms.subCategoryTwo.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $category = Category::pluck('id')->toArray();
        $subCategoryOne = SubCategoryOne::pluck('id')->toArray();
        $request->validate([
            'name' => 'required|max:150|min:3|string|unique:sub_category_twos,name',
            'category_id' => ['required',Rule::in($category)],
            'sub_category_one_id' => ['required',Rule::in($subCategoryOne)],
        ]);

        $subCategoryTwo = new SubCategoryTwo();
        $subCategoryTwo->category_id = $request->category_id;
        $subCategoryTwo->sub_category_one_id = $request->sub_category_one_id;
        $subCategoryTwo->name = $request->name;
        $subCategoryTwo->slug = Str::slug($request->name);
        if ($subCategoryTwo->save()) {
            return redirect()->route('cms.subCategoryTwo.index')->with(
                [
                    "message" => "Sub Category Two added Successfully", "alert-type" => "success"
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
        $subCategoryTwo = SubCategoryTwo::findOrFail($id);
        $categories = Category::get();
        return view('cms.subCategoryTwo.edit', compact('subCategoryTwo', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::pluck('id')->toArray();
        $subCategoryOne = SubCategoryOne::pluck('id')->toArray();
        $request->validate([
            'name' => 'required|max:150|min:3|string|unique:sub_category_twos,name,' .$id,
            'category_id' => ['required',Rule::in($category)],
            'sub_category_one_id' => ['required',Rule::in($subCategoryOne)],
        ]);

        $subCategoryTwo = SubCategoryTwo::findOrFail($id);
        $subCategoryTwo->category_id = $request->category_id;
        $subCategoryTwo->sub_category_one_id = $request->sub_category_one_id;
        $subCategoryTwo->name = $request->name;
        $subCategoryTwo->slug = Str::slug($request->name);
        if ($subCategoryTwo->save()) {
            return redirect()->route('cms.subCategoryTwo.index')->with(
                [
                    "message" => "Sub Category Two Updated Successfully", "alert-type" => "success"
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

    public function delete($id)
    {
        $subCategoryTwo = SubCategoryTwo::findOrFail($id);
        if ($subCategoryTwo->offers()->exists() || $subCategoryTwo->subCategoryThree()->exists()) {
            return redirect()->back()->with(['alert-type' => 'info', 'message' => 'Offer/Sub Category is present']);
        };
        if ($subCategoryTwo->delete()) {
            return redirect()->route('cms.subCategoryTwo.index')->with(
                [
                    "message" => "Sub Category Two Deleted Successfully", "alert-type" => "success"
                ]
            );
        } else {
            return redirect()->route('cms.subCategoryTwo.index')->with(
                [
                    "message" => "Something Went Wrong", "alert-type" => "error"
                ]
            );
        }
    }
}
