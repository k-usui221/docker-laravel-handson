<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'tetsuto',
            'mail' => 'testsuto@yamada.jp',
            'age' => '29',
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'shohei',
            'mail' => 'shohei@ohtani.jp',
            'age' => '27',
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'yoshinobu',
            'mail' => 'yoshinobu@yamamoto.jp',
            'age' => '23',
        ];
        DB::table('people')->insert($param);
        
    }
}
