<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConditionSeeder extends Seeder
{
    public function run(): void
    {
        $conditions = [
            'Bình thường',
            'Bán xác',
        ];

        foreach ($conditions as $name) {
            DB::table('conditions')->updateOrInsert(['name' => $name]);
        }
    }
}
