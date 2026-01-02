<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Address;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userIds = User::pluck('id')->toArray();
        $countries = ['Bangladesh', 'India', 'Thailand', 'Malaysia'];
        $cities = ['Dhaka', 'Sirajganj', 'Kathmandu', 'Mumbai'];
        $now = now();

        Address::insert([
            ['user_id' => $userIds[array_rand($userIds)], 'country' => $countries[array_rand($countries)], 'city' => $cities[array_rand($cities)], 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => $userIds[array_rand($userIds)], 'country' => $countries[array_rand($countries)], 'city' => $cities[array_rand($cities)], 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => $userIds[array_rand($userIds)], 'country' => $countries[array_rand($countries)], 'city' => $cities[array_rand($cities)], 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => $userIds[array_rand($userIds)], 'country' => $countries[array_rand($countries)], 'city' => $cities[array_rand($cities)], 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => $userIds[array_rand($userIds)], 'country' => $countries[array_rand($countries)], 'city' => $cities[array_rand($cities)], 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => $userIds[array_rand($userIds)], 'country' => $countries[array_rand($countries)], 'city' => $cities[array_rand($cities)], 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => $userIds[array_rand($userIds)], 'country' => $countries[array_rand($countries)], 'city' => $cities[array_rand($cities)], 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => $userIds[array_rand($userIds)], 'country' => $countries[array_rand($countries)], 'city' => $cities[array_rand($cities)], 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => $userIds[array_rand($userIds)], 'country' => $countries[array_rand($countries)], 'city' => $cities[array_rand($cities)], 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => $userIds[array_rand($userIds)], 'country' => $countries[array_rand($countries)], 'city' => $cities[array_rand($cities)], 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => $userIds[array_rand($userIds)], 'country' => $countries[array_rand($countries)], 'city' => $cities[array_rand($cities)], 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => $userIds[array_rand($userIds)], 'country' => $countries[array_rand($countries)], 'city' => $cities[array_rand($cities)], 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => $userIds[array_rand($userIds)], 'country' => $countries[array_rand($countries)], 'city' => $cities[array_rand($cities)], 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => $userIds[array_rand($userIds)], 'country' => $countries[array_rand($countries)], 'city' => $cities[array_rand($cities)], 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => $userIds[array_rand($userIds)], 'country' => $countries[array_rand($countries)], 'city' => $cities[array_rand($cities)], 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
