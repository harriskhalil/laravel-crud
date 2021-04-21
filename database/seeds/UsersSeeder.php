<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
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
                'name'=>'harris',
                'email'=>'haris@nodesol.com',
                'address'=>'House no 70 street no 1',
                'phone'=>'0333711213'
            ],
            [
                'name'=>'amer',
                'email'=>'amer@nodesol.com',
                'address'=>'House no 155 street no 1',
                'phone'=>'03096767777'
            ],
            [
            'name'=>'amer',
            'email'=>'amer@nodesol.com',
            'address'=>'House no 155 street no 1',
            'phone'=>'03096767777'
            ]
        ]);
    }
}
