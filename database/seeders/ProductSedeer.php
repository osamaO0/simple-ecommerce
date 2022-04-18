<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;

class ProductSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                "name"=>'LCD Screen',
                "price"=>'1500',
                "description"=>'Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content.',
                "category"=>'electronics',
                "gallery"=>'https://www.lg.com/eg_ar/images/tvs/md06251993/350.jpg',
            ],

            [
                "name"=>'Smart Mobile',
                "price"=>'4000',
                "description"=>'Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content.',
                "category"=>'mobiles',
                "gallery"=>'https://www.lg.com/levant_ar/images/plp-b2c/levantar-mobilephones-categoryselector-2.jpg',
            ],

            [
                "name"=>'Computer Screen',
                "price"=>'2500',
                "description"=>'Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content.',
                "category"=>'electronics',
                "gallery"=>'https://www.lg.com/eg_ar/images/monitors/md07536128/Anim-350-02.jpg',
            ],

            [
                "name"=>'Dj',
                "price"=>'2000',
                "description"=>'Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content.',
                "category"=>'electronics',
                "gallery"=>'https://www.lg.com/eg_ar/images/home-audios/md07520016/thumbnail/350-1.jpg',
            ],

            [
                "name"=>'fridge',
                "price"=>'8000',
                "description"=>'Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content.',
                "category"=>'electronics',
                "gallery"=>'https://www.lg.com/eg_ar/images/refrigerators/md07510703/thumbnail/thumbAni-350-01.jpg',
            ],
        ]);

    }
}
