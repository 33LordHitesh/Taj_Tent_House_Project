<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Package;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $packages = [
            [
                'name' => 'Standard',
                'description' => 'This is the Standard Package, suitable for small weddings.',
                'price' => 50000.00,
                'catering_included' => false,
            ],
            [
                'name' => 'Deluxe (No Catering)',
                'description' => 'Deluxe Package without catering. Includes premium decorations.',
                'price' => 75000.00,
                'catering_included' => false,
            ],
            [
                'name' => 'Deluxe (With Catering)',
                'description' => 'Deluxe Package with catering services included.',
                'price' => 100000.00,
                'catering_included' => true,
            ],
        ];

        foreach ($packages as $package) {
            Package::create($package);
        }
    }
}
