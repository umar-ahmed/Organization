<?php namespace UMAR\Organization\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateEmployeesTable extends Migration
{

    public function up() {

        Schema::create('umar_organization_employees', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->text('description');
            $table->string('email');
            $table->string('phone');
            $table->timestamps();
        });
        
        Schema::create('umar_organization_employees_roles', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('employee_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->primary(['employee_id', 'role_id'], 'employee_role');
        });
        
        Schema::create('umar_organization_employees_programs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('employee_id')->unsigned();
            $table->integer('program_id')->unsigned();
            $table->primary(['employee_id', 'program_id'], 'employee_program');
        });
    }

    public function down()
    {
        Schema::dropIfExists('umar_organization_employees');
        Schema::dropIfExists('umar_organization_employees_roles');
        Schema::dropIfExists('umar_organization_employees_programs');
    }

}
