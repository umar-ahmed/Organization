<?php namespace UMAR\Organization\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateMembershipsTable extends Migration
{

    public function up()
    {
        Schema::create('umar_organization_memberships', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->decimal('regular_rate',15,2);
            $table->decimal('early_rate',15,2);
            $table->decimal('new_rate',15,2);
            $table->text('description');
            $table->json('features');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('umar_organization_memberships');
    }

}
