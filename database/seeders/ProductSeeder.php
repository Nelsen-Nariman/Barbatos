<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::query()->insert(
            [
                [
                    "id" => 1,
                    "name" => "Badminton Racket",
                    "category_id" => 5,
                    "detail" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "price" => 150000,
                    "photo" => "https://images.tokopedia.net/img/cache/500-square/hDjmkQ/2021/3/8/063d2921-b2b2-41d7-b0ba-ef6a908e4d4f.jpg",
                ],
                [
                    "id" => 2,
                    "name" => "Berani tidak disukai",
                    "category_id" => 4,
                    "detail" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "price" => 100000,
                    "photo" => "https://cdnwpseller.gramedia.net/wp-content/uploads/2021/12/23165649/ID_BTD2019MTH10BTD.jpg",
                ],
                [
                    "id" => 3,
                    "name" => "Rexus Gamepad GX2",
                    "category_id" => 2,
                    "detail" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "price" => 200000,
                    "photo" => "https://rexus.id/wp-content/uploads/2018/08/GX2_05.jpg",
                ],

                [
                    "id" => 4,
                    "name" => "Filosofi Teras",
                    "category_id" => 4,
                    "detail" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "price" => 100000,
                    "photo" => "https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1548033656l/42861019._SX318_.jpg",
                ],

                [
                    "id" => 5,
                    "name" => "Nike LM 10",
                    "category_id" => 5,
                    "detail" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "price" => 5000000,
                    "photo" => "https://assets.bwbx.io/images/users/iqjWHBFdfxIU/iI98RNsqq4m8/v4/-1x-1.jpg",
                ],

                [
                    "id" => 6,
                    "name" => "Logitech Webcam C270",
                    "category_id" => 2,
                    "detail" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "price" => 500000,
                    "photo" => "https://cf.shopee.co.id/file/476edecc168daaeb1c7f65eb47156b03",
                ],

                [
                    "id" => 7,
                    "name" => "SteelSeries Headset Arctis 1",
                    "category_id" => 2,
                    "detail" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "price" => 1500000,
                    "photo" => "https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//99/MTA-5277519/steelseries_steelseries_arctis_1_wireless_full06_sfm7tuv7.jpg",
                ],

                [
                    "id" => 8,
                    "name" => "Rexus MX10 Gaming Keyboard",
                    "category_id" => 2,
                    "detail" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "price" => 2000000,
                    "photo" => "http://static.bmdstatic.com/gk/production/7b398aa3aa29eea8072bcd504c764731.jpg",
                ],

                [
                    "id" => 9,
                    "name" => "Detective Conan Vol.98",
                    "category_id" => 4,
                    "detail" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "price" => 25000,
                    "photo" => "https://cf.shopee.co.id/file/4787570bbb641b3645e0c8699b91d9f5",
                ],
                [
                    "id" => 10,
                    "name" => "Kyrie 7 Basketball Shoes",
                    "category_id" => 5,
                    "detail" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "price" => 5000000,
                    "photo" => "https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/073e0908-5d06-4fcc-91e3-45d5f87d5aa4/kyrie-7-basketball-shoes-nNMZ3b.png",
                ],
                [
                    "id" => 11,
                    "name" => "Stainless Table",
                    "category_id" => 6,
                    "detail" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "price" => 1000000,
                    "photo" => "https://cf.shopee.co.id/file/7efb76ac12cf662f963708be7a15466d_tn",
                ],
                [
                    "id" => 12,
                    "name" => "Rexona Men",
                    "category_id" => 8,
                    "detail" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "price" => 50000,
                    "photo" => "https://assets.klikindomaret.com/share/20062309_1.jpg",
                ],
                [
                    "id" => 13,
                    "name" => "Minimalis Sofa",
                    "category_id" => 6,
                    "detail" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "price" => 800000,
                    "photo" => "https://d2xjmi1k71iy2m.cloudfront.net/dairyfarm/id/images/518/0951873_PE801412_S3.jpg",
                ],
                [
                    "id" => 14,
                    "name" => "EA SPORTS FIFA 23",
                    "category_id" => 7,
                    "detail" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "price" => 800000,
                    "photo" => "https://cf.shopee.co.id/file/5bfa016b04e878bcbd55f820268b0a51",
                ],
                [
                    "id" => 15,
                    "name" => "Golden Chair",
                    "category_id" => 6,
                    "detail" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "price" => 8000000,
                    "photo" => "https://static3.depositphotos.com/1005997/204/i/950/depositphotos_2043811-stock-photo-golden-chair-isolated-on-white.jpg",
                ],
                [
                    "id" => 16,
                    "name" => "Black Sakura Perfume",
                    "category_id" => 8,
                    "detail" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "price" => 40000,
                    "photo" => "https://assets.klikindomaret.com/share/20100794_1.jpg",
                ],
                [
                    "id" => 17,
                    "name" => "ROG Phone 6",
                    "category_id" => 7,
                    "detail" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "price" => 15000000,
                    "photo" => "https://dlcdnwebimgs.asus.com/gain/3E5B1DD0-CAC0-4B35-8E2E-2D4116E17939/w1000/h732",
                ],
                [
                    "id" => 18,
                    "name" => "Grounded",
                    "category_id" => 7,
                    "detail" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "price" => 500000,
                    "photo" => "https://upload.wikimedia.org/wikipedia/en/a/ab/Grounded_game_cover_art.jpg",
                ],
                [
                    "id" => 19,
                    "name" => "EA SPORTS NBA 2K23",
                    "category_id" => 7,
                    "detail" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "price" => 500000,
                    "photo" => "https://m.media-amazon.com/images/I/510KYr-4bvL._AC_SY1000_.jpg",
                ],
                [
                    "id" => 20,
                    "name" => "ERHA Skinsitive Ultracalm Package",
                    "category_id" => 1,
                    "detail" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "price" => 278000,
                    "photo" => "https://cf.shopee.co.id/file/0b60273cc6f690f4376221eb1c1ed233",
                ],

                [
                    "id" => 21,
                    "name" => "Fiesta Chicken Nugget",
                    "category_id" => 3,
                    "detail" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "price" => 100000,
                    "photo" => "https://minio-s3.stg.embrio.id/cpfood/uploads/public/601/272/c24/thumb_841_0_0_0_0_auto.jpg",
                ],

                [
                    "id" => 22,
                    "name" => "Biore UV Aqua Rich Watery Essence SPF50",
                    "category_id" => 1,
                    "detail" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "price" => 120000,
                    "photo" => "https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/3/5/0/9/9/35099-large_default.jpg",
                ],

                [
                    "id" => 23,
                    "name" => "Kanzler Sausage",
                    "category_id" => 3,
                    "detail" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "price" => 20000,
                    "photo" => "https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//104/MTA-27689170/kanzler_sosis_single_kanzler_singles_original_full01_7b452de0.jpg",
                ],

                [
                    "id" => 24,
                    "name" => "French Fries 2000",
                    "category_id" => 3,
                    "detail" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "price" => 20000,
                    "photo" => "https://images.tokopedia.net/img/cache/700/VqbcmM/2021/3/17/f9c9d762-33f6-4731-b10f-f25a64cffc62.png",
                ],

                [
                    "id" => 25,
                    "name" => "Men's Biore Gentle Oil",
                    "category_id" => 1,
                    "detail" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "price" => 105000,
                    "photo" => "https://lzd-img-global.slatic.net/g/p/93b44ce22754c2a7dbb95a8862c86743.jpg_2200x2200q80.jpg_.webp",
                ],

                [
                    "id" => 26,
                    "name" => "Vienetta Ice Cream",
                    "category_id" => 3,
                    "detail" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "price" => 70000,
                    "photo" => "https://assets.klikindomaret.com/products/20103538/20103538_3.jpg",
                ],
            ]
        );
    }
}
