<?php

use Illuminate\Database\Seeder;

class KeywordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keywords')->insert([
            [
                'movie_id' => 1,
                'genre' => '人間ドラマ、邦画、凪の海',
            ],[
                'movie_id' => 2,
                'genre' => 'アカデミー賞、実写化、小説、洋画、ストーリー・オブ・マイライフ　私の若草物語',
            ],[
                'movie_id' => 3,
                'genre' => 'アクション、ホラー、洋画、ホーンテッド　世界一怖いお化け屋敷',
            ],[
                'movie_id' => 4,
                'genre' => 'SF、アクション、洋画、ワールドエンド',
            ],[
                'movie_id' => 5,
                'genre' => 'SF、大川隆法、邦画、心霊喫茶「エクルトラ」の秘密',
            ],[
                'movie_id' => 6,
                'genre' => '実写化、漫画、アクション、邦画、キングダム',
            ],[
                'movie_id' => 7,
                'genre' => '実写化、ポケモン、洋画、名探偵ピカチュウ',
            ],[
                'movie_id' => 8,
                'genre' => 'コメディ、ゾンビ、洋画、デッド・ドント・ダイ',
            ],[
                'movie_id' => 9,
                'genre' => 'アニメ、新海誠、感動、邦画、天気の子',
            ],[
                'movie_id' => 10,
                'genre' => 'アニメ、映画化、邦画、若おかみは小学生！',
            ]
        ]);
    }
}
