<?php namespace Andev\Musicool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndevMusicoolInfo extends Migration
{
    public function up()
    {
        Schema::create('andev_musicool_info', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('info');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andev_musicool_info');
    }
}
