<?php namespace Andev\Musicool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndevMusicoolPhone extends Migration
{
    public function up()
    {
        Schema::create('andev_musicool_phone', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('phone_number', 255);
            $table->smallInteger('is_main')->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andev_musicool_phone');
    }
}
