<?php

namespace App\Models;

use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    public function product_categories()
    {
        return $this->belongsTo(ProductCategory::class,'product_category_id');
    }
}
