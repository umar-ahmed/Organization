<?php namespace UMAR\Organization\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateProgramsTable extends Migration
{

    public function up() {
        Schema::create('umar_organization_programs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->json('timings');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('umar_organization_programs');
    }

}
