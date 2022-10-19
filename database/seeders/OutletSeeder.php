<?php

namespace Database\Seeders;

use App\Models\Outlet;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OutletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = fake('id_ID');
        for ($i=0; $i < 100; $i++) { 
            Outlet::create([
                'nama_outlet' => $faker->name(),
                'alamat_outlet' => $faker->address(),
                'telepon_outlet' => $faker->phoneNumber(),
                'email_outlet' => $faker->email()
            ]);
        }
    }
}
