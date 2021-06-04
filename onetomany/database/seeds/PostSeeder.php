<?php

use Illuminate\Database\Seeder;

use App\Post;
use App\Tag;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crea 50 elementi da inserire nella tabella POST ma non li salva nel db. Itera su ciascuno di loro
        factory(Post::class, 50) -> make()
            -> each(function($post){
                // Recupera un elemento casuale dalla tabella TAG
                $tag = Tag::inRandomOrder() -> first();
                // Associa la chiave esterna con la chiave primaria
                $post -> tag_id = $tag -> id;
                // Salva il post
                $post -> save();
            });
    }
}
