<?php namespace UMAR\Organization\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateRolesTable extends Migration
{

    public function up()
    {
        Schema::create('umar_organization_roles', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->boolean('executive');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('umar_organization_roles');
    }

}
