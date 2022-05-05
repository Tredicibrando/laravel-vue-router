<?php

use App\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'Pesce',
            'Carne',
            'Senza Lattosio',
            'Senza Glutine',
            'Vegano',
            'Per stomaci forti',
            'Vegetariano'
        ];

        foreach($tags as $name){

            Tag::create([
                'name'=>$name,
                'slug'=>Str::slug($name)
            ]);
        // $tags = new Tag();
        // $tags->name = $name;
        // $tags->slug = Str::slug($name);

        // $tags->save();
        }
    }
}
