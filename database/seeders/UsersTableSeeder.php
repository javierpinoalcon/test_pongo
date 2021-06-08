<?php

namespace Database\Seeders;

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
        //Nettoyage de la table d'users
        User::truncate();
        $faker = \Faker\Factory::create();

        $password = Hash::make('toptal');
        User::create([
			'name' => 'Administrator',
			'email' => 'admin@test.com',
			'password' => $password,
        	]);

        //Génération automatique d'users
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $password,
            ]);
    }
}
