<?php

namespace Database\Seeders;

use App\Models\Lib_officers;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class LibOfficers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $lib_officers = [
           [ 'Worshipful Master' , 1],
           [ 'Senior Warden' , 2],
           [ 'Junior Warden' , 3],
           [ 'Treasurer' , 4],
           [ 'Secretary' , 5],
           [ 'Auditor' , 6],
           [ 'Chaplain' , 7],
           [ 'Marshall' , 8],
           [ 'Senior Deacon' , 9],
           [ 'Junior Deacon' , 10],
           [ 'Orator' , 11],
           [ 'Lecturer' , 12],
           [ 'Senior Steward' , 13],
           [ 'Junior Steward' , 14],
           [ 'Organist' , 15],
           [ 'Almoner' , 16],
           [ 'Tyler' , 17],
           [ 'Member' , 18],
        ];

        foreach($lib_officers as $value){
            Lib_officers::create([
                'name' => $value[0],
                'description' => $value[0],
                'rank' => $value[1],
            ]);
        }
       
    }


}
