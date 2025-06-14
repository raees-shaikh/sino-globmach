<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Exhibition;
use Illuminate\Http\Request;

class ExhibitionController extends Controller
{
    public function index()
    {
        $exhibitions = Exhibition::latest()->paginate(10);
        return view('frontend.exhibition.index', compact('exhibitions'));
    }

    public function show($exhibitionSlug)
    {
        $exhibition = Exhibition::where('slug', $exhibitionSlug)->firstOrFail();
        $medias = $exhibition->medias()->latest()->get();
        return view('frontend.exhibition.show', compact('exhibition', 'medias'));
    }
}
