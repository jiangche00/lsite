<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	DB::table('students')->insert([
	[
		'id' => 16011201,
		'userName' => 'alfred',
		'class' => '1',
		'department' => 'computer_science',
		'telephone' => '13366667777',
	],
	[
                'id' => 16011202,
                'userName' => 'bob',
                'class' => '2',
                'department' => 'tele_communication',
                'telephone' => '13377778888',
	],
	[
                'id' => 16011203,
                'userName' => 'cicero',
                'class' => '3',
                'department' => 'math',
                'telephone' => '13388889999',
	]
	]);
    }
}
