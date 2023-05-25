<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = ['React', 'Angular', 'Vue.js', 'Svelte', 'jQuery', 'Backbone.js', 'Ember,js', 'Semantic-UI', 'Foundation', 'Spring', 'Express.js', 'Phoenix', 'Flask', 'Ruby on Rails', 'Django', 'Laravel'];

        Schema::disableForeignKeyConstraints();
        Technology::truncate();
        schema::enableForeignKeyConstraints();

        foreach ($technologies  as $technology) {

            $new_technology = new Technology();
            $new_technology->name = $technology;
            $new_technology->slug = Str::slug($new_technology->name);
            $new_technology->save();

        }
    }
}
