<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use App\Models\Site;
use Illuminate\Support\Facades\DB;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sites')->insert([
            'created_at'=> date('Y-m-d H:j:s'),
            'updated_at'=> date('Y-m-d H:j:s'),
            'location'=> 1,
            'rating'=> 1,
            'x_coord'=> 150,
            'y_coord'=> 300,
        ]);
        DB::table('sites')->insert([
            'created_at'=> date('Y-m-d H:j:s'),
            'updated_at'=> date('Y-m-d H:j:s'),
            'location'=> 1,
            'rating'=> 1,
            'x_coord'=> 250,
            'y_coord'=> 400,
        ]);
        DB::table('sites')->insert([
            'created_at'=> date('Y-m-d H:j:s'),
            'updated_at'=> date('Y-m-d H:j:s'),
            'location'=> 2,
            'rating'=> 2,
            'x_coord'=> 350,
            'y_coord'=> 200,
        ]);
        DB::table('sites')->insert([
            'created_at'=> date('Y-m-d H:j:s'),
            'updated_at'=> date('Y-m-d H:j:s'),
            'location'=> 2,
            'rating'=> 2,
            'x_coord'=> 390,
            'y_coord'=> 290,
        ]);
    }
}
