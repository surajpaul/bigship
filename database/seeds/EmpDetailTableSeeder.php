<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\carbon;

class EmpDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numberOfEmpDetails = \DB::table('employee_details')->count();

    	if($numberOfEmpDetails == 0)
    	{
    		DB::table('employee_details')->insert([
	        	'emp_id' => '1',
	        	'emp_name' => 'emp1',
	        	'emp_age' => '40',
	        	'emp_mobile' => '1234567890',
	        	'emp_emailid' => 'emp1@bigship.com',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now(),
	        ]);
	        DB::table('employee_details')->insert([
	        	'emp_id' => '2',
	        	'emp_name' => 'emp2',
	        	'emp_age' => '40',
	        	'emp_mobile' => '1234567892',
	        	'emp_emailid' => 'emp2@bigship.com',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now(),
	        ]);
	        DB::table('employee_details')->insert([
	        	'emp_id' => '3',
	        	'emp_name' => 'emp3',
	        	'emp_age' => '40',
	        	'emp_mobile' => '1234567893',
	        	'emp_emailid' => 'emp3@bigship.com',
	        	'created_at' => carbon::now(),
	        	'updated_at' => carbon::now(),
	        ]);
    	}
    }
}
