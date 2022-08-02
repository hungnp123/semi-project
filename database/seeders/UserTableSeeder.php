<?php

namespace Database\Seeders;

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
        DB::table('user') -> insert([
            [
            'user_name' => 'user1',
            'full_name'=> 'Le Hoang Minh',
            'password' => Hash::make('123'), 
            'role' => 'admin'

        ],
        [
            'user_name' => 'user2',
            'full_name'=> 'Nguyen Phi Hung',
            'password' => Hash::make('1234'), 
            'role' => 'customer'
        ]
        ]);
    }
}
