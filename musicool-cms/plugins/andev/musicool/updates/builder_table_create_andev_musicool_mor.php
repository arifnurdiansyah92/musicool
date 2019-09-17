<?php namespace Andev\Musicool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndevMusicoolMor extends Migration
{
    public function up()
    {
        Schema::create('andev_musicool_mor', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('mor');
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andev_musicool_mor');
    }
}
