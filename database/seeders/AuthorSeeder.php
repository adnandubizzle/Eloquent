<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PharIo\Manifest\AuthorElement;
use App\Models\Author;
use App\Models\Book;
use Database\Factories\BookFactory;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::factory()->count(10)->has(Book::factory()->count(2))->create();
    }
}
