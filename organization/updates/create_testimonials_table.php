<?php namespace UMAR\Organization\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateTestimonialsTable extends Migration
{

    public function up() {
        
        Schema::create('umar_organization_testimonials', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('content');
            $table->string('source');
            $table->string('url');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('umar_organization_testimonials');
    }

}
