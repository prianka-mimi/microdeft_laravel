<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AssetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('assets')->insert([
            'name' => 'Mouse',
        ]);

        DB::table('assets')->insert([
            'name' => 'Keyboard',
        ]);

        DB::table('assets')->insert([
            'name' => 'Monitor',
        ]);

        DB::table('assets')->insert([
            'name' => 'CPU',
        ]);

        DB::table('assets')->insert([
            'name' => 'Water bottle',
        ]);

        DB::table('assets')->insert([
            'name' => 'Tissue paper',
        ]);

        DB::table('assets')->insert([
            'name' => 'table fan',
        ]);
    }
}
