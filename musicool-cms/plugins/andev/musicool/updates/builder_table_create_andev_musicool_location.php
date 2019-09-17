<?php namespace Andev\Musicool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndevMusicoolLocation extends Migration
{
    public function up()
    {
        Schema::create('andev_musicool_location', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('nama', 255);
            $table->string('alamat', 255);
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andev_musicool_location');
    }
}
