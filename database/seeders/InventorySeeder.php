<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Inventory;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Inventory::create([
            'name' => 'IT Inventory',
            'department_id' => 1,
        ]);

        Inventory::create([
            'name' => 'Sales Inventory',
            'department_id' => 2,
        ]);

        Inventory::create([
            'name' => 'HR Inventory',
            'department_id' => 3,
        ]);

        Inventory::create([
            'name' => 'Marketing Inventory',
            'department_id' => 4,
        ]);
    }
}
