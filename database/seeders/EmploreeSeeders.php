<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmploreeSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'name' => 'fihryal faqiy',
            'status' => 'Berhasil',
            'surat' => '10',
            
            'name' => 'fihryal faqiy',
            'status' => 'Berhasil',
            'surat' => '10'
        ]);
    }
}