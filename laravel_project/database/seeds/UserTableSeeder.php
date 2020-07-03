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
                'email' => 'movie@test1.com',
                'password' => 'movietest1',
            ],[
                'name' => '映画　花子',
                'email' => 'movie@test2.com',
                'password' => 'movietest2',
            ],[
                'name' => '映画　サトシ',
                'email' => 'movie@test3.com',
                'password' => 'movietest3',
            ]
        ]); 
    }
}
