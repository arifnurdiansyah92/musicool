<?php namespace Andev\Musicool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndevMusicoolKota extends Migration
{
    public function up()
    {
        Schema::create('andev_musicool_kota', function($table)
        {
            $table->engine = 'InnoDB';
            $table->string('id');
            $table->string('kota');
            $table->string('provinsi_id');
            $table->foreign('provinsi_id')->references('id')->on('andev_musicool_provinsi');
            $table->primary(['id']);
            
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andev_musicool_kota');
    }
}
