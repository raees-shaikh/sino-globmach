<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Offer;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    public function index(Request $request)
    {

        $totalLatestOffer =  Category::get()->count();
        $totalOffers =  Offer::get()->count();
        return view('cms.index', ['totalLatestOffer' => $totalLatestOffer, 'totalOffers' => $totalOffers]);
    }
}
