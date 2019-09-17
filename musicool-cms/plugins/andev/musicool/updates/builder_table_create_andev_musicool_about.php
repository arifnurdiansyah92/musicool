<?php namespace Andev\Musicool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndevMusicoolAbout extends Migration
{
    public function up()
    {
        Schema::create('andev_musicool_about', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('about');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andev_musicool_about');
    }
}
