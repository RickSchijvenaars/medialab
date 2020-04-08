<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('character_expressions')->insert([
            'name' => 'neutral',
            'calc_separate' => false
        ]);

        DB::table('character_expressions')->insert([
            'name' => 'happy',
            'calc_separate' => false
        ]);

        DB::table('character_expressions')->insert([
            'name' => 'sad',
            'calc_separate' => false
        ]);

        DB::table('character_expressions')->insert([
            'name' => 'angry',
            'calc_separate' => false
        ]);

        DB::table('character_expressions')->insert([
            'name' => 'fearful',
            'calc_separate' => false
        ]);

        DB::table('character_expressions')->insert([
            'name' => 'disgusted',
            'calc_separate' => false
        ]);

        DB::table('character_expressions')->insert([
            'name' => 'surprised',
            'calc_separate' => false
        ]);

        DB::table('character_expressions')->insert([
            'name' => 'gender',
            'calc_separate' => true
        ]);

        DB::table('character_expressions')->insert([
            'name' => 'age',
            'calc_separate' => true
        ]);
    }
}
