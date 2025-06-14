<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OffersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = [
            1 => [
                'Airjet',
                'Rapier',
                'Projectile',
                'Water Jet',
            ],
            2 => [
                'Open End ',
                'Carding',
                'Magazine Feed Winding',
                'Ring Spinning ',
            ],
            3  => [
                //'CARDING',
                'Combers',
                'Ringframes',
                'Tow To Top-winding',
            ],
            4  => [
                'Circular Knitting',
                'Flat Knitting',
                'Warp Knitting',


            ],
            5  => [
                'Woven',
                'Knitted',
            ],
            6 => [
                'Synthetic POY/FDY/PSF/PPSF/',
                'PPMFY/Nylon6 Spinning',
                'Textursing',
                'Twisting',
                'Aircovering',
            ],
            7  => [
                'PP/HDPE Tape Extrusion Lines',
                'PP/PET/HDPE Recyling Lines',
                'PP/HDPE Circualr Looms',
                'Extrusion Coating Lines',
                'BOPP Film Line',
                'BoPET Film',
                '3/5/7/9 Layer Extrusion Film Lines',
                'CO2 Foam XPS Production Line',
                'EPS Recycling',
                'Underwater Pelletizing System',
                'PET Foam Production Line',
                'PET Sheet Extrusion Line',
                'Bioplastic Extrusion',
                'Twin Screw Extruder',
                'Masterbatch Machines',
            ],
            8  => [
                'Needle Punching',
                'Thermobonding',
                'Spunbonding',
                'Spunlace',
                'Meltblown',
                'Chemical Bond',


            ],
        ];
        foreach ($categories as $offers => $offer) {
            foreach ($offer as $o => $of) {
                DB::table('offers')->insert([
                    "category_id" => $offers,
                    "title" => $of,
                    "slug" => Str::slug($of),
                    "image" => null,
                    "body" => null,
                    "created_at" => now(),
                    "updated_at" => now(),
                ]);
            }
        }
    }
}
