<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // IT Inventory
        Item::create([
            'name' => 'Laptop',
            'quantity' => 10,
            'inventory_id' => 1,
        ]);

        Item::create([
            'name' => 'Monitor',
            'quantity' => 20,
            'inventory_id' => 1,
        ]);

        // Sales Inventory
        Item::create([
            'name' => 'Phone',
            'quantity' => 15,
            'inventory_id' => 2,
        ]);

        // HR Inventory
        Item::create([
            'name' => 'Shredder',
            'quantity' => 5,
            'inventory_id' => 3,
        ]);

        // Marketing Inventory
        Item::create([
            'name' => 'Camera',
            'quantity' => 8,
            'inventory_id' => 4,
        ]);
    }
}
