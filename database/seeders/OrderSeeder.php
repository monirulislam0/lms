<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\User;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userIds = User::pluck('id')->toArray();
        $now = now();

        Order::insert([
            ['user_id' => $userIds[array_rand($userIds)], 'amount' => 150.50, 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => $userIds[array_rand($userIds)], 'amount' => 200.75, 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => $userIds[array_rand($userIds)], 'amount' => 350.00, 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => $userIds[array_rand($userIds)], 'amount' => 125.25, 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => $userIds[array_rand($userIds)], 'amount' => 499.99, 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => $userIds[array_rand($userIds)], 'amount' => 75.00, 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => $userIds[array_rand($userIds)], 'amount' => 890.50, 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => $userIds[array_rand($userIds)], 'amount' => 320.80, 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => $userIds[array_rand($userIds)], 'amount' => 175.60, 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => $userIds[array_rand($userIds)], 'amount' => 450.00, 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => $userIds[array_rand($userIds)], 'amount' => 99.99, 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => $userIds[array_rand($userIds)], 'amount' => 650.25, 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => $userIds[array_rand($userIds)], 'amount' => 275.50, 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => $userIds[array_rand($userIds)], 'amount' => 525.75, 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => $userIds[array_rand($userIds)], 'amount' => 399.00, 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
