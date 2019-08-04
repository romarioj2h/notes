<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('notes')->insert([
                'title' => Str::random(),
                'text' => Str::random(100),
                'color' => 'primary',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
