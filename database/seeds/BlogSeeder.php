<?php

use Illuminate\Database\Seeder;
use App\Blog;
use Faker\Factory as Faker;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

    	for($i=1;$i<3;$i++){
	    	$data = new Blog;
	    	$data->name = $faker->name;
	    	$data->user_id = 3;
	    	$data->save();
    	}

    	for($i=1;$i<3;$i++){
	    	$data = new Blog;
	    	$data->name = $faker->name;
	    	$data->user_id = 2;
	    	$data->save();
    	}

    }
}
