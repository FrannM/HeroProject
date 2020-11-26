<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('levels')->truncate();
        $xp = 100;
        DB::table('levels')->insert([
            "xp" => $xp
        ]);
        for ($i = 0; $i < 50; $i++) {
            $xp = $xp * 2;

            DB::table('levels')->insert([
                "xp" => $xp
            ]);


        }
    }
}
