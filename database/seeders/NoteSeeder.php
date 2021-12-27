<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use App\Models\Note;
use Illuminate\Support\Facades\DB;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Notes')->insert([
            'created_at'=> date('Y-m-d H:j:s'),
            'updated_at'=> date('Y-m-d H:j:s'),
            'site'=> 1,
            'note'=> 'ok every couple of months',
        ]);
    }
}
