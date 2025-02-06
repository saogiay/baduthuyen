<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	[
        		'name' => 'Thế Anh',
        		'email' => 'info@gmail.com',
        		'password' => bcrypt('123456'),
        	],
        ];
        DB::table('users')->insert($data);
    }
}
