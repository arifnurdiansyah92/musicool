<?php namespace Andev\Musicool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndevMusicoolSubscribers extends Migration
{
    public function up()
    {
        Schema::create('andev_musicool_subscribers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('email', 255);
            $table->smallInteger('status')->default(1);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andev_musicool_subscribers');
    }
}
