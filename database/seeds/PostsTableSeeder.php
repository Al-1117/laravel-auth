<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 7 ; $i++) {

      $new_post = new Post();
      $new_post->user_id = $i + 1;
      $new_post->image = $faker->imageUrl();
      $new_post->title = $faker->word();
      $new_post->content = $faker->text(500);

      $new_post->save();

      }
    }
}
