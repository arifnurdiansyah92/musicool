<?php namespace Andev\Musicool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndevMusicoolKecamatan extends Migration
{
    public function up()
    {
        Schema::create('andev_musicool_kecamatan', function($table)
        {
            $table->engine = 'InnoDB';
            $table->string('id');
            $table->string('kecamatan');
            $table->string('kota_id');
            $table->foreign('kota_id')->references('id')->on('andev_musicool_kota');
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andev_musicool_kecamatan');
    }
}
