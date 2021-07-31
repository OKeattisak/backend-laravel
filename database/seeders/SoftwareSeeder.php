<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoftwareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('software')->insert([
            'software_name' => 'BC Account',
            'created_at' => Carbon::now()
        ]);

        DB::table('software')->insert([
            'software_name' => 'SML Account POS',
            'created_at' => Carbon::now()
        ]);

        DB::table('software')->insert([
            'software_name' => 'SML Account',
            'created_at' => Carbon::now()
        ]);

        DB::table('software')->insert([
            'software_name' => 'SML POS',
            'created_at' => Carbon::now()
        ]);

        DB::table('software')->insert([
            'software_name' => 'B49',
            'created_at' => Carbon::now()
        ]);
    }
}
