<?php

namespace Database\Seeders;

use Carbon\Carbon;
use GuzzleHttp\Client;
use App\Models\Product;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create('id_ID');
        // Product::create([
        //     'name' => 'Turtle Neck',
        //     'description' => $faker->sentence(5),
        //     'price' => '200000',
        //     'photo' => 'https://img.ws.mms.shopee.co.id/6e6d3194d74157cfe8fbe3d3d6708dd0',
        //     'category_id' => 1,
        // ]);
        $product = [
            [
                'name' => 'Piyama Girl',
                'description' => 'Is clothing that is used for sleeping, made from soft and comfortable for women',
                'price' => '300000',
                'photo' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//99/MTA-8708561/no_brand_piyama_3in1_satin_polos_eropa_baju_tidur_piama_dewasa_cewek_pajamas_sleepwear_full03_evjc260t.jpg',
                'category_id' => 2,
            ],
            [
                'name' => 'Piyama Boy',
                'description' => 'Is clothing used for sleeping, made from soft and comfortable for men',
                'price' => '50000',
                'photo' => 'https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/7/28/298d77c3-ead7-4162-801e-f192373590d9.jpg',
                'category_id' => 1,
            ],
            [
                'name' => 'Turtle Neck',
                'description' => 'is a top collar model with a tight shape to cover all parts of the wearers neck',
                'price' => '150000',
                'photo' => 'https://s3.bukalapak.com/img/85722396592/s-330-330/aa213034_5a68_45d1_ac5c_84489ea76ffd.jpg',
                'category_id' => 1,
            ],
            [

                'name' => 'Plain t-shirt',
                'description' => 'It is very comfortable everyday clothing, has comfortable materials',
                'price' => '25000',
                'photo' => 'https://lzd-img-global.slatic.net/g/ff/kf/S78cc3b039b8f424185458ce02699776eB.jpg_720x720q80.jpg',
                'category_id' => 1,
            ],
            [
                'name' => 'Blazzer Boy',
                'description' => 'It is a European formal dress, long sleeved and worn over a shirt for men',
                'price' => '500000',
                'photo' => 'https://lzd-img-global.slatic.net/g/p/9e866a50fc0b2610b831e93a0ebf9c86.jpg_200x200q80.jpg',
                'category_id' => 1,
            ],
            [
                'name' => 'Blazzer Girl',
                'description' => 'It is a European formal dress, long sleeved and worn over a shirt for woman',
                'price' => '700000',
                'photo' => 'https://i.pinimg.com/550x/b9/2a/54/b92a54e2e2c9c9d4be41eef10592c720.jpg',
                'category_id' => 2,
            ],
            [
                'name' => 'Sweeter',
                'description' => 'is a style of clothing that can protect the body from hot or cold weather for woman',
                'price' => '80000',
                'photo' => 'https://s0.bukalapak.com/img/5920779563/s-330-330/Sweater_Wanita_Putih____Switer_cewe_white___Atasan_Perempuan.jpg',
                'category_id' => 2,
            ],
            [
                'name' => 'Jacket',
                'description' => 'is clothing made of thick material, worn when the air (weather) is cold for man',
                'price' => '200000',
                'photo' => 'https://www.montbell.us/products/prod_img/zoom/z_2301368_bric.jpg',
                'category_id' => 1,
            ],
            [
                'name' => 'Plaid Shirt',
                'description' => 'is one type of outerwear or it can also be underwear that is usually used for men',
                'price' => '60000',
                'photo' => 'https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/9/19/312642ef-409f-4af1-a6dd-efb4ee267984.jpg',
                'category_id' => 1,
            ],
            [
                'name' => 'Blouse',
                'description' => 'Blouses are loose-fitting shirts that are often worn by women and children.',
                'price' => '45000',
                'photo' => 'https://images.tokopedia.net/img/cache/700/VqbcmM/2021/6/29/77da6349-9c2e-4594-8284-08c7ed52803b.jpg',
                'category_id' => 2,
            ],
            [
                'name' => 'Culotes',
                'description' => 'Culottes are a piece of clothing that looks like a combination of a skirt and shorts.',
                'price' => '150000',
                'photo' => 'https://images.tokopedia.net/img/cache/700/VqbcmM/2022/10/17/4f215834-2070-4a46-97c4-5daed3f8704d.jpg',
                'category_id' => 1,
            ],
            [
                'name' => 'Cargo',
                'description' => 'is one type of pants that has many pockets with protruding pockets, often used by men',
                'price' => '60000',
                'photo' => 'https://id-live-01.slatic.net/p/0c09b885acfac7964f50a3793cd54f69.jpg',
                'category_id' => 1,
            ],
        ];

        $client = new Client();

        foreach ($product as $item) {
            $response = $client->request('GET', $item['photo']);
            $extension = pathinfo($item['photo'], PATHINFO_EXTENSION);
            $photoName = uniqid() . '.' . $extension;
            Storage::put('public/' . $photoName, $response->getBody());

            Product::insert([
                'name' => $item['name'],
                'description' => $item['description'],
                'price' => $item['price'],
                'photo' => $photoName,
                'category_id' => $item['category_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
