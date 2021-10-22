<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
           [
            'name'=> 'AirCase Laptop Bag',
            'price'=>'200',
            'description'=> 'Brown,15.9Inch Unisex Bag',
            'category'=> 'Accessories',
            "gallery"=>'https://5.imimg.com/data5/UB/KE/KD/SELLER-84504487/aircase-c34-25-ltrs-laptop-backpack-15-6-inch-bag-for-men-women-brown--500x500.jpg', 
           ],
           [
            'name'=> 'Color Bright Glass Watch',
            'price'=>'2500',
            'description'=> 'Chronograph Mens Stainless Steel Business watch',
            'category'=> 'Accessories',
            "gallery"=>'https://cdn.alzashop.com/Foto/f16/RI/RI027b3.jpg',
           ],
           [
            'name'=> 'Air Jordan 1',
            'price'=>'5200',
            'description'=> 'Air Jordan Retro High, University Blue',
            'category'=> 'Sneakers',
            "gallery"=>'https://cdn-images.farfetch-contents.com/15/81/95/63/15819563_32921118_1000.jpg',
           ],
           [
            'name'=> 'Airforce 1',
            'price'=>'809',
            'description'=> 'Low top sneakers-men',
            'category'=> 'Sneakers',
            "gallery"=>'https://cdn-images.farfetch-contents.com/16/87/00/51/16870051_33574455_1000.jpg',
           ],
           [
            'name'=> 'Kente patterned Jacket',
            'price'=>'200',
            'description'=> 'Ghana Made Unisex Winter Jacket ',
            'category'=> 'Clothes',
            "gallery"=>'https://cdn.shopify.com/s/files/1/0309/5068/6764/collections/kente-clothing-202662_800x800.jpg?v=1618323985',
        ]
        ]);
    }
}

// DB::table('products')->insert([
//     [
//      'name'=> 'LG QLED',
//      'price'=>'20000',
//      'description'=> 'A TV with high resolution. 64Inch',
//      'category'=> 'Gadgets',
//      "gallery"=>'https://cdn.shopify.com/s/files/1/0309/5068/6764/collections/kente-clothing-202662_800x800.jpg?v=1618323985', 
//     ],
//     [
//      'name'=> 'Iphone Xr',
//      'price'=>'2500',
//      'description'=> '32GB,Product Red',
//      'category'=> 'Gadgets',
//      "gallery"=>'https://cdn.alzashop.com/Foto/f16/RI/RI027b3.jpg',
//     ],
//     [
//      'name'=> 'Air Jordan 1',
//      'price'=>'5200',
//      'description'=> 'Air Jordan Retro High, University Blue',
//      'category'=> 'shoes',
//      "gallery"=>'https://cdn-images.farfetch-contents.com/15/81/95/63/15819563_32921118_1000.jpg',
//     ],
//     [
//      'name'=> 'Airforce 1',
//      'price'=>'809',
//      'description'=> 'Low top sneakers-men',
//      'category'=> 'shoes',
//      "gallery"=>'https://cdn-images.farfetch-contents.com/16/87/00/51/16870051_33574455_1000.jpg',
//     ],
//     [
//      'name'=> 'Macbook Pro',
//      'price'=>'11000',
//      'description'=> 'Catalina-32Inch-1T',
//      'category'=> 'Gadget',
//      "gallery"=>'https://www.apple.com/newsroom/images/tile-images/Apple_16-inch-MacBook-Pro_111319.jpg.news_app_ed.jpg',
//  ]