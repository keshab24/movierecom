<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LanguagesSeeder::class);
       
        $this->call(VotesSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(MoviesSeeder::class);
       
        
        $this->call(GenreSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(KeywordSeeder::class);
        
        $this->call(VotesSeeder::class);
        $this->call(RatingSeeder::class);
    }

}
