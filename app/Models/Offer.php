<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
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

    public function subCategoryTwo()
    {
        return $this->belongsTo(SubCategoryTwo::class);
    }

    public function subCategoryThree()
    {
        return $this->belongsTo(SubCategoryThree::class);
    }
}
