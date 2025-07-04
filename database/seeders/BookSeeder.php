<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Genre;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::factory()
            ->count(20)
            ->create()
            ->each(function ($book) {
                $genres = Genre::inRandomOrder()->take(2)->pluck('id');
                $book->genres()->attach($genres);
            });
    }
}
