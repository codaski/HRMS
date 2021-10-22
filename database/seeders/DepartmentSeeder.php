<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->delete();

        $departments = array(
            array('name' => 'HR Department', 'slug' => 'hr', 'created_at' => now(), 'updated_at' => now()),
            array('name' => 'Sales Department', 'slug' => 'sales', 'created_at' => now(), 'updated_at' => now()),
            array('name' => 'Operations Department', 'slug' => 'operations', 'created_at' => now(), 'updated_at' => now()),
            array('name' => 'Accountant Department', 'slug' => 'accountant', 'created_at' => now(), 'updated_at' => now()),
            array('name' => 'IT Department', 'slug' => 'it', 'created_at' => now(), 'updated_at' => now()),
            array('name' => 'Top Management', 'slug' => 'top-management', 'created_at' => now(), 'updated_at' => now()),
            array('name' => 'Logistics Department', 'slug' => 'logistics', 'created_at' => now(), 'updated_at' => now()),
            array('name' => 'Public Relationships Department', 'slug' => 'pr', 'created_at' => now(), 'updated_at' => now()),
        );

        DB::table('departments')->insert($departments);
    }
}
