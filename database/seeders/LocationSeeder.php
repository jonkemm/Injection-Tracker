<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use App\Models\Location;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            'name'=>'Right leg',
            'created_at'=> date('Y-m-d H:j:s'),
            'updated_at'=> date('Y-m-d H:j:s'),
            'sites_updated_at'=> date('Y-m-d H:j:s'),
            'user'=>1,
            'image'=> 'seeder/leg.jpg',
            'url'=> 'https://sites-jk.s3.eu-west-2.amazonaws.com/seeder/leg.jpg',
        ]);
        DB::table('locations')->insert([
            'name'=>'Kevin',
            'created_at'=> date('Y-m-d H:j:s'),
            'updated_at'=> date('Y-m-d H:j:s'),
            'sites_updated_at'=> date('Y-m-d H:j:s'),
            'user'=>1,
            'image'=> 'seeder/purple-circles.jpg',
            'url'=> 'https://sites-jk.s3.eu-west-2.amazonaws.com/seeder/purple-circles.jpg',
        ]);
    }
}
