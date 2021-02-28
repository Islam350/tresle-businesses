<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
            'id'            => 1,
            'name'          => 'Alberta',
            'country_id'    => 1,
        ]);
        DB::table('regions')->insert([
            'id'            => 2,
            'name'          => 'Ontario',
            'country_id'    => 1,
        ]);
    }
}
