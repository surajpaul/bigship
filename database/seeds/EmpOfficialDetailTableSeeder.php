<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\carbon;

class EmpOfficialDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numberOfEmpOfficialDetails = \DB::table('emp_official_details')->count();

    	if($numberOfEmpOfficialDetails == 0)
    	{
    		DB::table('emp_official_details')->insert([
	        	'emp_id' => '1',
	        	'emp_salary' => '40000',
	        	'emp_department' => 'IT department',
	        	'emp_designation' => 'developer',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now(),
	        ]);
	        DB::table('emp_official_details')->insert([
	        	'emp_id' => '2',
	        	'emp_salary' => '40000',
	        	'emp_department' => 'HR',
	        	'emp_designation' => 'Senior HR',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now(),
	        ]);
	        DB::table('emp_official_details')->insert([
	        	'emp_id' => '3',
	        	'emp_salary' => '60000',
	        	'emp_department' => 'IT department',
	        	'emp_designation' => 'Senior developer',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now(),
	        ]);
    	}
    }
}
