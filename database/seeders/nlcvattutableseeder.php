<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class nlcvattutableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('nlcvattu')->insert([
            'nlcmavattu'=>'DD01',
            'nlctenvattu'=>'Đầu DVD Hitachi 1 cửa',
            'nlcdvt'=>'Bộ',
            'nlcphamtram'=>40,
        ]);
        DB::table('nlcvattu')->insert([
            'nlcmavattu'=>'DD02',
            'nlctenvattu'=>'Đầu DVD Hitachi 2 cửa',
            'nlcdvt'=>'Bộ',
            'nlcphamtram'=>50,
        ]);
    }
}
