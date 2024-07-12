<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedStaff();
    }

    public function seedStaff(){

        User::truncate();
        $faker = Faker::create();
        foreach (range(1, 10) as $index) { // Adjust the range as needed
            $user = User::create([
                'email' => 'staff'.$index.'@test.com',
                'password' => Hash::make('password'), // You may adjust this as needed
                "name" => $faker->name,
                // "first_name" => $faker->firstName,
                // "middle_name" => $faker->firstName, // Just an example, adjust as needed
                // "last_name" => $faker->lastName,
                // "birth_date" => $faker->date,
                // "gender" => $faker->randomElement(['male', 'female']),
                // "mobile" => $faker->phoneNumber,
                // "address" => $faker->address,
                // "address_city" => $faker->city,
                // "address_province" => $faker->state,
                // "address_zip" => $faker->postcode,
                // "shipping_address" => $faker->address,
                // "shipping_address_city" => $faker->city,
                // "shipping_address_province" => $faker->state,
                // "shipping_address_zip" => $faker->postcode,
                // "id_type" => $faker->randomElement(['passport', 'driver_license', 'national_id']),
                // "id_number" => $faker->unique()->randomNumber(8),
            ]);
            $user->assignRole('staff-admin');
        }
      
    }
}
