<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        // $this->call(ProductSeeder::class);
        // $this->call(OrderStatusSeeder::class);
        // $this->call(OrderSeeder::class);
        // $this->call(PromotionSeeder::class);
        // $this->call(ChatSeeder::class);
        // $this->call(ChatsSeeder::class);
        // $this->call(NontificationSeeder::class);
        $this->call(NonfiCationSeeder::class);

        
    }
}
