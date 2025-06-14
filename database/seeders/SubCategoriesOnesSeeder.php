<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategoriesOnesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $SubCategoriesOne = [
            1 => [
                'SULZER PROJECTILES LOOMS',
                'SULZER RUTI SWISS IN RAPIER LOOMS',
                'PICANOL BELGIUM AIRJET LOOMS',
                'PICANOL BELGIUM RAPIER LOOMS',
                'SOMET ITALY RAPIER LOOMS',
                'VAMATEX ITALY RAPIER LOOMS',
                'ITEMA ITALY RAPIER LOOMS',
                'ITEMA ITALY AIRJET LOOMS',
                'NUOVO PIGNONE ITALY RAPIER LOOMS',
                'SAURER SWISS RAPIER LOOMS',
                'TOYOTA JAPAN AIRJET LOOMS',
                'TSUDAKOMA JAPAN AIRJET LOOMS',
                'TSUDAKOMA JAPAN WATERJET LOOMS',
                'RIFA CHINA AIRJET LOOMS',
                'REDFALG RAPIER LOOMS',
                'VAN DE WEILE RAPIER LOOMS',
                'GUSKEN RAPIER LOOMS',
            ],
            2 => [
                'RIETER SWISS CARDING',
                'RIETER SWISS COMBER',
                'RIETER SWISS ROVING FRAMES',
                'RIETER SIWSS RING SPINNING FRAMES',
                'ZINSER GERMANY RING FRAMES COTTON',
                'TOYOTA JAPAN RING FRAMES COTTON',
            ],
            3 => [
                'NSC  COMBING',
                'NSC FRANCE GILL BOXES',
                'OCTIR GERMANY WOOLEN CARDS',
                'ZINSER GERMANY RING FRAMES WORSTED/WOOLEN',
                'NSC FRANCE WORSTED COMBERS',
                'SCHALFHORST WINDERS FOR WORSTED/WOOL',
                'MURATA  WINDERS FOR WORSTED/WOOL',
            ],
            4 => [
                'MAYER & CIE GERMAN KNITTING CIRCULAR',
                'TERROT-PILLOTELI GERMANY CIRCULAR KNITTING',
                'PAILUNG TAIWAN CIRCULAR KNITTING',
                'KARL MAYER GERMANY WARP KNITTING',
                'LIBA GERMANY WARP KNITTING',
                'STOLL FLAT KNITTING',
                'UNIVERSAL FLAT KNITTING',
                'SHEIMA SHIEKE FLAT KNITTING',
            ],
            5 => [
                'BENNINGER SWISS CDR RANGE PROCESSING',
                'BENNINGER BLEACHING',
                'BENNINGER',
                'MONFHORST GERMANY SANFORISING',
                'KUSTER SIWSS CALANDER',
            ],
            6 => [
                'POLYESTER POY / FDY FILAMENT',
                'POLYESTER STAPLE FIBER',
                'POLYPROPEYLEN STAPLE FIBER',
                'POLYPROPYELEN FILAMENT POY/FDY,PPMFY,PP MONO FILAMENT',
                'OERLIKON BARMAG POLYESTER POY / FDY FILAMENT',
                'NEUMAG POLYESTER POY / FDY FILAMENT',
                'TORAY POLYESTER POY / FDY FILAMENT',
                'TIEJIN SEIKI  POLYESTER POY / FDY FILAMENT',
                'OERLIKON BARMAG  POLYESTER STAPLE FIBER',
                'NEUMAG POLYESTER STAPLE FIBER',
                'JWELL CHINA POLYESTER STAPLE FIBER',
                'CHONGLEE CHINA POLYESTER STAPLE FIBER',
                'OERLIKON BARMAG POLYPROPEYLEN STAPLE FIBER',
                'NEUMAG POLYPROPEYLEN STAPLE FIBER',
                'FARE ITALY POLYPROPEYLEN STAPLE FIBER',
                'ESL UK POLYPROPEYLEN STAPLE FIBER',
                'MECCANICA MORDENE POLYPROPEYLEN STAPLE FIBER',
                'SML POLYPROPYELEN FILAMENT POY/FDY, PPMFY,PP MONO FILAMENT',
                'VARMEC POLYPROPYELEN FILAMENT POY/FDY, PPMFY,PP MONO FILAMENT',
                'BARMAG POLYPROPYELEN FILAMENT POY/FDY, PPMFY,PP MONO FILAMENT',
                'JWELL CHINA POLYPROPYELEN FILAMENT POY/FDY, PPMFY,PP MONO FILAMENT',
                'CHONGLEE CHINA POLYPROPYELEN FILAMENT POY/FDY, PPMFY,PP MONO FILAMENT',
                'BARMAG POLYPROYELEN–HDPE TAPE EXTRUSION WITH WINDER',
                'STARLINGER POLYPROYELEN–HDPE TAPE EXTRUSION WITH WINDER',
                'LOHIA POLYPROYELEN–HDPE TAPE EXTRUSION WITH WINDER',
                'WINDMOLLER POLYPROYELEN–HDPE TAPE EXTRUSION WITH WINDER',
                'BARMAG CIRCUALR LOOMS 6/8/10/12 SHUTTLES',
                'LOHIA CIRCUALR LOOMS 6/8/10/12 SHUTTLES',
                'STARLINGER CIRCUALR LOOMS 6/8/10/12 SHUTTLES',
                'WINDMOLLER CIRCUALR LOOMS 6/8/10/12 SHUTTLES',
                'LOHIA COATING & LAMINATION',
                'STARLINGER COATING & LAMINATION',
                'BARMAG COATING & LAMINATION',
                'WINDMOLLER COATING & LAMINATION',
                'LAROCHE FRANCE RAG TEARING',
                'PIEERITE FRANCE RAG TEARING',
                'BENNINGER  SWISS CDR RANGE PROCESSING',
                'BENNINGER BLEACHING',
                'BENNINGER',
                'MONFHORST GERMANY  SANFORISING',
                'KUSTER SIWSS CALANDER',
                'BENNINGER SWISS  WARPING DIRECT',
                'BENNINGER SWISS WARPING SECTIONAL',
                'KARL MAYER GERMANY  WARPING DIRECT',
                'KARL MAYER GERMANY WARPING SECTIONAL',
                'BENNINGER SWISS SIZING',
                'KARL MAYER GERMANY SIZING',
                'WESTPOINT USA WARPING',
                'ROTAL ITALAY WARPING',
                'ZIMMER ROTOARY PRINTING',
                'STORK FLAB BED PRINTING',
                'FONGS DYEING',
            ],
            7 => [
                'TAPE EXTRUSION WITH WINDER',
                'CIRCUALR WEAVING',
                'COATING & LAMINATION',
            ],
            8 => [
                'NEEDLE PUNCHING LINES',
                'DILO DILO NEEDLE PUNCHING LINES',
                'FERHER NEEDLE PUNCHING LINES',
                'ASSELIN NEEDLE PUNCHING LINES',
                'YINGYANG NEEDLE PUNCHING LINES',
                'THERMOBONDING NON WOVEN LINES',
                'SPUNBONDING NON WOVEN LINES',
                'CHEMICAL BONDING NON WOVEN LINES',
                'SPUNLACE LINE NON WOVEN LINES',
            ],
            10 => [
                'SAURER GERMANY EMBROIDERY',
                'LASSER SWISS EMBROIDERY',
                'ZSK SWISS EMBORIDERY',
                'BARUDAN GERMANY EMBORIDERY',
            ],
            13 => [
                'MURATA JAPAN WINDING',
                'SCHAFLHOSRT GERMANY WINDING',
                'SAVIO ITALIAN WINDING',
            ],
            14 => [
                'ELITEX CZECH OPEN END SPINNING MACHINES',
                'SAURER GERMANY OPEN END SPINNING  MAHCINES',
                'TAITIAN CHINA OPEN END SPINNING MACHINES',
            ],
            15 => [
                'BENNINGER SWISS  WARPING DIRECT',
                'BENNINGER SWISS WARPING SECTIONAL',
                'KARL MAYER GERMANY WARPING DIRECT',
                'KARL MAYER GERMANY WARPING SECTIONAL',
                'BENNINGER SWISS SIZING',
                'KARL MAYER GERMANY SIZING',
                'WESTPOINT USA WARPING',
                'ROTAL ITALAY WARPING',
            ],
            16 => [
                'TRUTSZCHLER GERMAN CARDING',
                'RIETER SWISS CARDING',
            ],
            17 => [
                'RIETER SIWSS RING SPINNING FRAMES',
                'LMW RING SPINNING FRAMES',
                'ZINSER GERMANY RING FRAMES COTTON',
                'TOYOTA JAPAN RING FRAMES COTTON',
            ],
            18 => [
                'ELITEX CZECH OPEN END SPINNING MACHINES',
                'SAURER  GERMANY OPEN END SPINNING  MAHCINES',
                'TAITIAN CHINA OPEN END SPINNING MACHINES',
            ],

        ];
        foreach ($SubCategoriesOne as $categories => $cat) {
            foreach ($cat as $ones => $one) {
                DB::table('sub_category_ones')->insert([
                    "category_id" => $categories,
                    "name" => $one,
                    "slug" => Str::slug($one),
                    "body" => null,
                    "created_at" => now(),
                    "updated_at" => now(),
                ]);
            }
        }
    }
}
