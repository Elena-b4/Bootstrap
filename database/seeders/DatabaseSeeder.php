<?php

namespace Database\Seeders;

use App\Models\Algae;
use App\Models\Bake;
use App\Models\River_fish;
use App\Models\Sea_fish;
use App\Models\Seafood;
use App\Models\Shop;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $algaes = [
            [
                'title' => 'Ламинария',
                'price' => 6,
            ],
            [
                'title' => 'Красные водоросли',
                'price' => 8,
            ],
            [
                'title' => 'Бурые водоросли',
                'price' => 3,
            ],
        ];

        foreach ($algaes as $algae) {
            Algae::create($algae);
        }

        $bakes = [
            [
                'title' => 'Слоеный рыбный пирог',
                'price' => 24,
            ],
            [
                'title' => 'Заливной рыбный пирог',
                'price' => 13,
            ],
            [
                'title' => 'Рыбные пирожные',
                'price' => 3,
            ],
            [
                'title' => 'Сырный пирог с креветками',
                'price' => 63,
            ],
            [
                'title' => 'Пирожные с мидиями',
                'price' => 8,
            ],
        ];

        foreach ($bakes as $bake) {
            Bake::create($bake);
        }

        $riverFishes = [
            [
                'title' => 'Карп',
                'price' => 6,
            ],
            [
                'title' => 'Линь',
                'price' => 9,
            ],
            [
                'title' => 'Окунь',
                'price' => 11,
            ],
            [
                'title' => 'Угорь',
                'price' => 14,
            ],
            [
                'title' => 'Осётр',
                'price' => 18,
            ],
        ];

        foreach ($riverFishes as $riverFish) {
            River_fish::create($riverFish);
        }

        $seaFishes = [
            [
                'title' => 'Дорадо',
                'price' => 18,
            ],
            [
                'title' => 'Тунец',
                'price' => 52,
            ],
            [
                'title' => 'Треска',
                'price' => 35,
            ],
            [
                'title' => 'Салака',
                'price' => 23,
            ],
            [
                'title' => 'Сайда',
                'price' => 41,
            ],
            [
                'title' => 'Навага',
                'price' => 23,
            ],
            [
                'title' => 'Палтус',
                'price' => 36,
            ],

        ];

        foreach ($seaFishes as $seaFish) {
            Sea_fish::create($seaFish);
        }

        $seafoods = [
            [
                'title' => 'Мидии',
                'price' => 34,
            ],
            [
                'title' => 'Устрицы',
                'price' => 79,
            ],
            [
                'title' => 'Раки',
                'price' => 27,
            ],
            [
                'title' => 'Креветки',
                'price' => 48,
            ],
            [
                'title' => 'Кальмары',
                'price' => 59,
            ],
            [
                'title' => 'Осьминоги',
                'price' => 63,
            ],
        ];

        foreach ($seafoods as $seafood) {
            Seafood::create($seafood);
        }

        $seafoodsArr = Seafood::all();
        $algaesArr = Algae::all();
        $riverFishesArr = River_fish::all();
        $seaFishesArr = Sea_fish::all();
        $bakesArr = Bake::all();

        $shops = [
            [
                'address' => 'пр-т Независимости 149',
                'seafood_id' => $seafoodsArr->find(1)->id,
                'algae_id' => $algaesArr->find(1)->id,
                'river_fish_id' => $riverFishesArr->find(1)->id,
                'sea_fish_id' => $seaFishesArr->find(1)->id,
                'bake_id' => $bakesArr->find(1)->id,
            ],
            [
                'address' => 'пр-т Партизанскй 34',
                'seafood_id' => $seafoodsArr->find(2)->id,
                'algae_id' => $algaesArr->find(2)->id,
                'river_fish_id' => $riverFishesArr->find(2)->id,
                'sea_fish_id' => $seaFishesArr->find(2)->id,
                'bake_id' => $bakesArr->find(2)->id,
            ],
            [
                'address' => 'пр-т Победителей 35',
                'seafood_id' => $seafoodsArr->find(3)->id,
                'algae_id' => $algaesArr->find(3)->id,
                'river_fish_id' => $riverFishesArr->find(3)->id,
                'sea_fish_id' => $seaFishesArr->find(3)->id,
                'bake_id' => $bakesArr->find(3)->id,
            ],
            [
                'address' => 'пр-т Держинского 28',
                'seafood_id' => $seafoodsArr->find(4)->id,
                'algae_id' => $algaesArr->find(1)->id,
                'river_fish_id' => $riverFishesArr->find(4)->id,
                'sea_fish_id' => $seaFishesArr->find(4)->id,
                'bake_id' => $bakesArr->find(4)->id,
            ],
            [
                'address' => 'ул. Немига 109',
                'seafood_id' => $seafoodsArr->find(5)->id,
                'algae_id' => $algaesArr->find(2)->id,
                'river_fish_id' => $riverFishesArr->find(5)->id,
                'sea_fish_id' => $seaFishesArr->find(5)->id,
                'bake_id' => $bakesArr->find(5)->id,
            ],
            [
                'address' => 'ул. Калиновского 189',
                'seafood_id' => $seafoodsArr->find(6)->id,
                'algae_id' => $algaesArr->find(3)->id,
                'river_fish_id' => $riverFishesArr->find(2)->id,
                'sea_fish_id' => $seaFishesArr->find(6)->id,
                'bake_id' => $bakesArr->find(2)->id,
            ],
        ];

        foreach ($shops as $shop) {
            Shop::create($shop);
        }
    }
}
