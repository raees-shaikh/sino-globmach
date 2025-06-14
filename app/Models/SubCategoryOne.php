<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategoryOne extends Model
{
    use HasFactory;
    public function categories()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    function subCategoryTwo(){
        return $this->hasMany(SubCategoryTwo::class);
    }

    function subCategoryThree(){
        return $this->hasMany(SubCategoryThree::class);
    }

    function offers(){
        return $this->hasMany(Offer::class);
    }
}
