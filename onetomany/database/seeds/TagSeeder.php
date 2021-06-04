<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Inserisce 10 elementi e li salva nella tabella TAG del database
        factory(Tag::class, 10) -> create();
    }
}
