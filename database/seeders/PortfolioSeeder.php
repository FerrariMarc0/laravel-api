<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Portfolio;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\Type;
use Illuminate\Support\Facades\Schema;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        Schema::disableForeignKeyConstraints();
        Portfolio::truncate();
        schema::enableForeignKeyConstraints();


        for($i = 0; $i < 20; $i++) {
            $type = Type::inRandomOrder()->first();
            $portfolio = new Portfolio();
            $portfolio->name = $faker->sentence(3);
            $portfolio->start_date = $faker->date();
            $portfolio->description = $faker->text();
            $portfolio->slug = Str::slug($portfolio->name);
            $portfolio->type_id = $type->id;
            $portfolio->save();
        }
    }
}
