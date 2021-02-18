<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert([
            'titre' => "FenderTune",
            'url' => "/images/thumbnails/thumbnail_fenderTune.png"
        ]);

        DB::table('photos')->insert([
            'titre' => "mminetwork",
            'url' => "/images/thumbnails/thumbnail_mminetwork.png"
        ]);

        DB::table('photos')->insert([
            'titre' => "citron",
            'url' => "/images/portfolio/1.jpg"
        ]);
    }
}
