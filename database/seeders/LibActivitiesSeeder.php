<?php

namespace Database\Seeders;

use App\Models\Lib_activities;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class LibActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $activities = ['Stated Meeting','Special Meeting'];
        foreach($activities as $value){
            Lib_activities::create([
                'name' => $value,
                'description' => $value,
                'created_by' => 1,
            ]);
        }
       
    }
}
