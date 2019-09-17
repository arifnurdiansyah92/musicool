<?php namespace Andev\Musicool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndevMusicoolProvinsi extends Migration
{
    public function up()
    {
        Schema::create('andev_musicool_provinsi', function($table)
        {
            $table->engine = 'InnoDB';
            $table->string('id');
            $table->string('provinsi');
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andev_musicool_provinsi');
    }
}
