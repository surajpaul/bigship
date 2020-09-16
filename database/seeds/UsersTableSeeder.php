<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numberOfUsers = \DB::table('users')->count();

    	if($numberOfUsers == 0)
    	{
    		DB::table('users')->insert([
    			'role_id' => '1',
	        	'name' => 'Super Admin',
	        	'username' => 'superAdmin',
	        	'email' => 'superadmin@gmail.com',
	        	'password' => bcrypt('test1234'),
	        	'mobile' => '9876500000',
	        	'login_date_time' => carbon::now(),
	        	'logout_date_time' => '',
	        	'status' => 'active',
	        ]);
	        DB::table('users')->insert([
    			'role_id' => '2',
	        	'name' => 'Admin',
	        	'username' => 'admin',
	        	'email' => 'admin@gmail.com',
	        	'password' => bcrypt('test1234'),
	        	'mobile' => '9876500001',
	        	'login_date_time' => carbon::now(),
	        	'logout_date_time' => '',
	        	'status' => 'active',
	        ]);
	        DB::table('users')->insert([
    			'role_id' => '3',
	        	'name' => 'Customer',
	        	'username' => 'customer',
	        	'email' => 'customer@gmail.com',
	        	'password' => bcrypt('test1234'),
	        	'mobile' => '9876500002',
	        	'login_date_time' => carbon::now(),
	        	'logout_date_time' => '',
	        	'status' => 'active',
	        ]);
    	}
    }
}
