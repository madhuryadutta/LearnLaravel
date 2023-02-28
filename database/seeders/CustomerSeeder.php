<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer ;
use Faker\factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create();
        for($i=1;$i<100;$i++){
            $customer = new Customer;
            $customer->customer_name = $faker->name;
            $customer->customer_email = $faker->email;
            $customer->customer_gender = 'M';
            $customer->customer_address =$faker->address ;
            $customer->customer_city = $faker->city;
            $customer->customer_state =$faker->state;
            $customer->customer_dob = $faker->date;
            $customer->customer_password = $faker->password;
            $customer->save();
        } 
       


        // code for for seeder 

        // $customer = new Customer;
        // $customer->customer_name = 'Madhurya Dutta';
        // $customer->customer_email = 'iam.madhurya@outlook.com';
        // $customer->customer_gender = 'M';
        // $customer->customer_address ='Lakhimpur';
        // $customer->customer_city = 'Lakhimpur';
        // $customer->customer_state = 'Lakhimpur';
        // $customer->customer_dob = '2023-02-28';
        // $customer->customer_password = '81dc9bdb52d04dc20036dbd8313ed055';
        // $customer->save();

    }
}
