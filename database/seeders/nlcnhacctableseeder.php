<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class nlcnhacctableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker =Faker ::create();
        foreach(range(1,100) as $index)
        {
            DB::table('nlcnhacc')->insert([
                'nlcnanhacc'=>$faker->uuid(),
                // 'MaNCC'=>$faker->word(15),
                'nlctennhacc'=>$faker->sentence(5),
                'nlcdiachi'=>$faker->address(),
                'nlcdienthoai'=>$faker->phoneNumber(10),
                //'email'=>$faker->email(),
                //'status'=>$faker->boolean()
            ]) ;       
        }
    }
}
