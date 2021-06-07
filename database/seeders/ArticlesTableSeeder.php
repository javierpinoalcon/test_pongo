<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Suppression des records à chaque fois
        Article::truncate();

        $faker = \Faker\Factory::create();

        //Création des articles dans la BD
        for ($i = 0; $i < 50; $i++){
        	Article::create([
        		'title' => $faker->sentence,
        		'body' => $faker->paragraph,
        		]);
        }  
    }
}
