<?php

use Illuminate\Database\Seeder;

class QrScanLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('qr_scan_locations')->insert([
            'name' => 'drinks',
        ]);
        DB::table('qr_scan_locations')->insert([
            'name' => 'food',
        ]);
        DB::table('qr_scan_locations')->insert([
            'name' => 'toilet',
        ]);
    }
}
