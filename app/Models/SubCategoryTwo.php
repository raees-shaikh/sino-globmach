<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategoryTwo extends Model
{
    use HasFactory;
    public function categories()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function subCategoryOne()
    {
        return $this->belongsTo(SubCategoryOne::class);
    }

    function offers(){
        return $this->hasMany(Offer::class);
    }

    function subCategoryThree(){
        return $this->hasMany(SubCategoryThree::class);
    }
}
