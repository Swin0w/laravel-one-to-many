<?php

use Illuminate\Database\Seeder;

use App\Detail;
use App\Post;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Listo tutti i post
        $posts = Post::all();
        //Itero sui post
        foreach ($posts as $post) {
            // Creiamo un dettaglio senza salvarlo e lo prendiamo, chiamando anche i post
            factory(Detail::class, 1) -> make() -> each(function($detail) use($post)
            {
                // Associamo la chiave esterna alla chiave primaria
               $detail -> post_id  = $post -> id;
               // Salviamo il tutto
               $detail -> save(); 
            });
        }

    }
}
