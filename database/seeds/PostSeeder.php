<?php

use App\Category;
use Illuminate\Database\Seeder;
use App\Post;
use App\Tag;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $categories = Category::all();
        $categoriesId = $categories->pluck('id')->all();

        $tags = Tag::all();
        $tagsId = $tags->pluck('id')->all();

        for ($i=0; $i < 100 ; $i++) { 
            
            $post = new Post();
            $post->title = $faker->words(6,true);
            $post->slug = Str::slug( $post->title );
            $post->description = $faker->paragraph(10,true);
            $post->published_at = $faker->randomElement([null, $faker->dateTime()]);
            $post->category_id = $faker->randomElement( $categoriesId );
            //popolo il post

            $randomTags = $faker->randomElement( $tagsId, 2);
            // prendo due elementi random dell array tagsId
            $post->save();
            // metto id del post dopo che salvo
            $post->tags()->attach( $randomTags ); 

        }
    }
}
