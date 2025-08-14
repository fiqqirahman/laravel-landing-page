<?php

namespace Database\Seeders;

use App\Models\Berita;
use App\Models\Kategori;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 5 categories
        $kategori = Kategori::factory()->count(5)->create();

        // Create 10 tags
        $tags = Tag::factory()->count(10)->create();

        // Create 20 news articles, assigning a random category to each
        Berita::factory()->count(20)->make()->each(function ($berita) use ($kategori, $tags) {
            $berita->id_kategori = $kategori->random()->id;
            $berita->save();

            // Attach 1 to 3 random tags to each article
            $berita->tags()->attach(
                $tags->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
