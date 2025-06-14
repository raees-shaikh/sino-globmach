<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\Category;
use Illuminate\Http\Request;

class OfferController extends Controller
{

    public function index()
    {
        $categories = Category::latest()->paginate(12);
        return view('frontend.latest-arrivals.all-arrival', compact('categories'));
    }

    public function subCategoryOne($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        // $subCatOne = $category->subCategoryOne()->latest()->paginate(12, ['*'], 'c');
        // $offers = $category->offers()->where([['sub_category_one_id', null], ['sub_category_two_id', null], ['sub_category_three_id', null]])->latest()->paginate(12, ['*'], 'offer');
        $offers = $category->offers()->latest()->paginate(12, ['*'], 'offer');
        $relatedCategories = Category::where('id', '!=', $category->id)->latest()->get();
        return view('frontend.latest-arrivals.sub-cat-one', compact('category', 'relatedCategories', 'offers'));
    }

    // public function subCategoryTwo($slug, $subCatSlug)
    // {
    //     $category = Category::where('slug', $slug)->firstOrFail();
    //     $subCatOne = $category->subCategoryOne()->whereSlug($subCatSlug)->firstOrFail();
    //     $subCatTwo = $subCatOne->subCategoryTwo()->latest()->paginate(12, ['*'], 'c');
    //     $offers = $category->offers()->where([['sub_category_one_id', '!=', null], ['sub_category_two_id', null], ['sub_category_three_id', null]])->latest()->paginate(12, ['*'], 'offer');
    //     $relatedCategories = Category::where('slug', '!=', $slug)->latest()->get();
    //     return view('frontend.latest-arrivals.sub-cat-two', compact('category', 'subCatOne', 'subCatTwo', 'relatedCategories', 'offers'));
    // }

    // public function subCategoryThree($slug, $subCatOneSlug, $subCatTwo)
    // {
    //     $category = Category::where('slug', $slug)->firstOrFail();
    //     $subCatOne = $category->subCategoryOne()->whereSlug($subCatOneSlug)->firstOrFail();
    //     $subCatTwo = $subCatOne->subCategoryTwo()->whereSlug($subCatTwo)->firstOrFail();
    //     $subCatThree = $subCatTwo->subCategoryThree()->latest()->paginate(12, ['*'], 'c');
    //     $offers = $category->offers()->where([['sub_category_one_id', '!=', null], ['sub_category_two_id', '!=', null], ['sub_category_three_id', null]])->latest()->paginate(12, ['*'], 'offer');
    //     $relatedCategories = Category::where('slug', '!=', $slug)->latest()->get();
    //     return view('frontend.latest-arrivals.sub-cat-three', compact('category', 'subCatOne', 'subCatTwo', 'subCatThree', 'relatedCategories', 'offers'));
    // }

    // public function offerIndex($slug, $subCatOneSlug, $subCatTwoSlug, $subCatThreeSlug)
    // {
    //     $category = Category::where('slug', $slug)->firstOrFail();
    //     $subCatOne = $category->subCategoryOne()->whereSlug($subCatOneSlug)->firstOrFail();
    //     $subCatTwo = $subCatOne->subCategoryTwo()->whereSlug($subCatTwoSlug)->firstOrFail();
    //     $subCatThree = $subCatTwo->subCategoryThree()->whereSlug($subCatThreeSlug)->firstOrFail();
    //     $offers = $subCatThree->offers()->latest()->paginate(12);
    //     $relatedCategories = Category::where('slug', '!=', $slug)->latest()->get();
    //     return view('frontend.latest-arrivals.offer-index', compact('category', 'subCatOne', 'subCatTwo', 'subCatThree', 'offers', 'relatedCategories'));
    // }

    // public function offerShow($slug, $subCatOneSlug, $subCatTwoSlug, $subCatThreeSlug, $offerSlug)
    // {
    //     $category = Category::where('slug', $slug)->firstOrFail();
    //     $subCatOne = $category->subCategoryOne()->whereSlug($subCatOneSlug)->firstOrFail();
    //     $subCatTwo = $subCatOne->subCategoryTwo()->whereSlug($subCatTwoSlug)->firstOrFail();
    //     $subCatThree = $subCatTwo->subCategoryThree()->whereSlug($subCatThreeSlug)->firstOrFail();
    //     $offer = $subCatThree->offers()->whereSlug($offerSlug)->firstOrFail();
    //     $relatedOffers = Offer::where('category_id', $category->id)->where('slug', '!=', $offerSlug)->latest()->limit(5)->get();
    //     return view('frontend.latest-arrivals.offer-show', compact('category', 'subCatOne', 'subCatTwo', 'subCatThree', 'offer', 'relatedOffers'));
    // }

    public function show($categorySlug, $offerSlug)
    {
        $category = Category::where('slug', $categorySlug)->firstOrFail();
        $offer = Offer::where('category_id', $category->id)->where('slug', $offerSlug)->firstOrFail();
        $relatedOffers = Offer::where('category_id', $category->id)->where('id', '!=', $offer->id)->latest()->get();

        return view('frontend.latest-arrivals.offer-show', compact('category', 'offer', 'relatedOffers'));
    }
}
