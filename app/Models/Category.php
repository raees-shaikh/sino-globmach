<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table="categories";

    function offers(){
        return $this->hasMany('App\Models\Offer');
    }

    function subCategoryOne(){
        return $this->hasMany(SubCategoryOne::class);
    }

    function subCategoryTwo(){
        return $this->hasMany(SubCategoryTwo::class);
    }

    function subCategoryThree(){
        return $this->hasMany(SubCategoryThree::class);
    }
}
