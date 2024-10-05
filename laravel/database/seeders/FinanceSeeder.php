<?php

namespace Database\Seeders;

use App\Models\Finance;
use Illuminate\Database\Seeder;

class FinanceSeeder extends Seeder
{
    public function run()
    {
        Finance::factory()->count(10)->create();
    }
}

