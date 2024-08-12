<?php

namespace Database\Seeders;

use App\Models\Member_type;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class MemberType extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $member_types = [
           [ 'Member' , 1],
           [ 'Entered Apprentice Mason' , 2],
           [ 'Fellowcraft Mason' , 3],
           [ 'Master Mason' , 4],
           [ 'Petitioner' , 5],
        ];



        foreach($member_types as $value){
            Member_type::create([
                'name' => $value[0],
                'description' => $value[0],
                'rank' => $value[1],
            ]);
        }
       
    }


}
