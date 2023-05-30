<?php

namespace Database\Seeders;

use App\Models\Lead;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 15; $i++){
            $lead = new Lead();
            $lead->user = fake()->name;
            $lead->email = fake()->freeEmail;
            $lead->message = fake()->text;
            $lead->save();
        }

    }
}
