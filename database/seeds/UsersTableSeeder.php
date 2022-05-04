<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $faker = Faker\Factory::create('pl_PL');

        for($i=1;$i<=100;$i++)
        {
            DB::table('users')->insert([
                'name' => $faker->firstName,
                'email' => $faker->email,
                'password' => bcrypt('1234567890'),
                'sex' => $faker->randomElement($array = array('m', 'k')),
                'is_active' => $faker->randomElement($array = array(true, false)),
            ]);
        }
    }
}
