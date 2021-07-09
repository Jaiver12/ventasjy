<?php

namespace Database\Seeders;

use App\Models\Denomination;
use Illuminate\Database\Seeder;

class DenominationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Denomination::create([
            'type' => 'billete',
            'value' => 1000
        ]);

        Denomination::create([
            'type' => 'billete',
            'value' => 2000
        ]);

        Denomination::create([
            'type' => 'billete',
            'value' => 5000
        ]);

        Denomination::create([
            'type' => 'moneda',
            'value' => 1000
        ]);

        Denomination::create([
            'type' => 'moneda',
            'value' => 500
        ]);

        Denomination::create([
            'type' => 'otro',
            'value' => 0
        ]);
    }
}
