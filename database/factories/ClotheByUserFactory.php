<?php

/*
|--------------------------------------------------------------------------
| Model Factories Clothes by user
|--------------------------------------------------------------------------
*/

$factory->define(App\ClotheByUser::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker -> name,
        'state' => rand(0,1),
        'stock' => rand(1,15),
        'clothes_categories_id' => rand(1,5),
        'clothing_size_id' => rand(1,5),
        'clothing_brand_id' =>rand(1,5)
    ];
});
