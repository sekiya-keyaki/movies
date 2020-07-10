<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => '映画　太郎',
                'email' => 'movie1@test.com',
                'password' => Hash::make('movietest1'),
            ],[
                'name' => '映画　花子',
                'email' => 'movie2@test.com',
                'password' => Hash::make('movietest2'),
            ],[
                'name' => '映画　サトシ',
                'email' => 'movie3@test.com',
                'password' => Hash::make('movietest1'),
            ]
        ]); 
    }
}
