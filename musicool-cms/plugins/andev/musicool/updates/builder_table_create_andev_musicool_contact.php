<?php namespace Andev\Musicool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndevMusicoolContact extends Migration
{
    public function up()
    {
        Schema::create('andev_musicool_contact', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('email', 255)->nullable();
            $table->string('no_telfon', 255)->nullable();
            $table->string('twitter', 255)->nullable();
            $table->string('facebook', 255)->nullable();
            $table->string('googleplus', 255)->nullable();
            $table->string('linkedin', 255)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andev_musicool_contact');
    }
}
