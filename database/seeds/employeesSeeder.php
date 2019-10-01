<?php

use Illuminate\Database\Seeder;
use App\Model\Employee;
class employeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Employee::class, 20) -> create();
    }
}
