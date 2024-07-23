<?php

namespace Database\Seeders;

use App\Models\Lib_directory;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class LibDirectorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $activities = [
            'Photo Documentations',
            'Minutes/Proceedings',
            'Downloadable Forms',
            'Grand Lodge Issuances',
            'Financial Report'
        ];

        foreach($activities as $value){
            Lib_directory::create([
                'name' => $value,
                'description' => $value,
                'created_by' => 1,
            ]);
        }
       
    }


}
