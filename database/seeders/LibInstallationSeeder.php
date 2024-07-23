<?php

namespace Database\Seeders;

use App\Models\Lib_installation;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class LibInstallationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $activities = [
            'Balanghay Nine Masonic Lodge',
            'Agusan Valley Masonic Lodge',
            'Mt. Diwata Masonic Lodge',
            'Pumlao Masonic Lodge',
            'Red Mountain Masonic Lodge',
            'Kamamo Masonic Lodge',
            'Timberland Masonic Lodge',
            'Agusan Mash Masonic Lodge',
            'Siargao Masonic Lodge'

        ];
        foreach($activities as $value){
            Lib_installation::create([
                'name' => $value,
                'description' => $value,
            ]);
        }
       
    }
}
