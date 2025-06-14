<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [

            [
                'name' => 'Weaving',
                'image' => 'weaving.png'
            ],
            [
                'name' => 'Cotton Spinning',
                'image' => 'cotton-spin.png'
            ],
            [
                'name' => 'Worsted/Wool ',
                'image' => 'woolen-spin.png'
            ],
            [
                'name' => 'Knitting',
                'image' => 'knitting.png'
            ],
            [
                'name' => 'Yarn & Fabric Woven & Knitted Dyeing, Printing & Finishing',
                'image' => 'printing-f.png'
            ],
            [
                'name' => 'Man Made Fiber',
                'image' => 'man-made.png'
            ],
            [
                'name' => 'HDPE-PP-PET Machinery',
                'image' => 'pp-pet.png'
            ],
            [
                'name' => 'Non Woven',
                'image' => 'non-woven.png'
            ],
            [
                'name' => 'Coating',
                'image' => 'coating.png'
            ],
            [
                'name' => 'Embroidery',
                'image' => 'emb.png'
            ],
            [
                'name' => 'Narrow Fabric Looms',
                'image' => 'narrow.png'
            ],
            [
                'name' => 'Miscellaneous Plants & Machinerys',
                'image' => 'plants.png'
            ],
            [
                'name' => 'Winding',
                'image' => 'winding.png'
            ],
            [
                'name' => 'Open End Machines',
                'image' => 'open-machine.png'
            ],
            [
                'name' => 'Warping & Sizing',
                'image' => 'warping.png'
            ],
            [
                'name' => 'Carding',
                'image' => 'warping.png'
            ],
            [
                'name' => 'Ring Farmes',
                'image' => 'warping.png'
            ],
            [
                'name' => 'Open End Spinning',
                'image' => 'warping.png'
            ],


        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'title' => Str::ucfirst($category['name']),
                // 'image' => $category['image'],
                'slug' => Str::slug($category['name']),
                "created_at" => now(),
                "updated_at" => now()
            ]);
        }
        // $categories_img = Category::get();
        // foreach ($categories_img as $category) {
        //     try {
        //         File::copy(public_path('images/icons/' . $category->image), storage_path('app/public/images/latest_arrival/' . $category->image));
        //     } catch (\Throwable $th) {
        //         Log::error($th);
        //     }
        // }
    }
}
