<?php namespace Andev\Musicool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndevMusicoolEmail extends Migration
{
    public function up()
    {
        Schema::create('andev_musicool_email', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('email', 255);
            $table->integer('is_main')->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andev_musicool_email');
    }
}
